"""
RCGEN QuickBooks Service
Handles OAuth 2.0, SalesReceipt (Income), Expense posting,
token refresh, sync logging, and retry logic.
"""

import httpx
import base64
import logging
from datetime import datetime, timedelta
from urllib.parse import urlencode
from typing import Optional

from src.config import settings

logger = logging.getLogger(__name__)

# ─── Income Categories → QBO Account Names ────────────────────────
INCOME_CATEGORY_MAP = {
    "School Fees":        "School Fees Income",
    "Registration Fees":  "Registration Fees Income",
    "Donations":          "Donations Income",
    "Sponsorships":       "Sponsorships Income",
}

# ─── Expense Categories → QBO Account Names ───────────────────────
EXPENSE_CATEGORY_MAP = {
    "Salaries":           "Salaries & Wages",
    "Utilities":          "Utilities",
    "Rent":               "Rent Expense",
    "Food":               "Food & Nutrition",
    "Cleaning Supplies":  "Cleaning Supplies",
    "Transport":          "Transport & Travel",
    "Maintenance":        "Maintenance & Repairs",
    "Bank Charges":       "Bank Service Charges",
}


class QuickBooksService:
    def __init__(self, portal_id: int, db=None):
        self.portal_id = portal_id
        self.db = db  # AsyncSession (injected)
        self.client_id = settings.QBO_CLIENT_ID
        self.client_secret = settings.QBO_CLIENT_SECRET
        self.redirect_uri = settings.QBO_REDIRECT_URI
        self.scope = settings.QBO_SCOPE
        self.environment = settings.QBO_ENVIRONMENT

    # ─────────────────────────────────────────────────────────────
    # STEP 1: START OAUTH FLOW
    # Returns the Intuit authorization URL to redirect the user to
    # ─────────────────────────────────────────────────────────────
    def start_oauth_flow(self) -> str:
        params = {
            "client_id":     self.client_id,
            "redirect_uri":  self.redirect_uri,
            "response_type": "code",
            "scope":         self.scope,
            "state":         str(self.portal_id),  # passed back in callback
        }
        url = f"{settings.QBO_AUTH_URL}?{urlencode(params)}"
        logger.info(f"[QBO] OAuth flow started for portal {self.portal_id}")
        return url

    # ─────────────────────────────────────────────────────────────
    # STEP 2: HANDLE OAUTH CALLBACK
    # Exchange authorization code for access + refresh tokens
    # Save tokens to quickbooks_connections table
    # ─────────────────────────────────────────────────────────────
    async def oauth_callback(self, code: str, realm_id: str) -> dict:
        credentials = base64.b64encode(
            f"{self.client_id}:{self.client_secret}".encode()
        ).decode()

        async with httpx.AsyncClient() as client:
            response = await client.post(
                settings.QBO_TOKEN_URL,
                headers={
                    "Authorization": f"Basic {credentials}",
                    "Content-Type":  "application/x-www-form-urlencoded",
                    "Accept":        "application/json",
                },
                data={
                    "grant_type":   "authorization_code",
                    "code":         code,
                    "redirect_uri": self.redirect_uri,
                },
            )

        if response.status_code != 200:
            logger.error(f"[QBO] Token exchange failed: {response.text}")
            raise Exception(f"QBO token exchange failed: {response.text}")

        token_data = response.json()
        logger.info(f"[QBO] Tokens received for portal {self.portal_id}, realm {realm_id}")

        # Calculate expiry times
        access_expires_at = datetime.utcnow() + timedelta(
            seconds=token_data.get("expires_in", 3600)
        )
        refresh_expires_at = datetime.utcnow() + timedelta(
            seconds=token_data.get("x_refresh_token_expires_in", 8726400)  # ~101 days
        )

        # Save to database
        connection_data = {
            "portal_id":           self.portal_id,
            "realm_id":            realm_id,
            "access_token":        token_data["access_token"],
            "refresh_token":       token_data["refresh_token"],
            "token_expires_at":    access_expires_at,
            "refresh_expires_at":  refresh_expires_at,
            "environment":         self.environment,
            "is_active":           True,
            "connected_at":        datetime.utcnow(),
        }

        if self.db:
            await self._save_connection(connection_data)

        return {
            "realm_id":           realm_id,
            "environment":        self.environment,
            "token_expires_at":   access_expires_at.isoformat(),
            "refresh_expires_at": refresh_expires_at.isoformat(),
            "status":             "connected",
        }

    # ─────────────────────────────────────────────────────────────
    # STEP 3: POST INCOME → QBO SalesReceipt
    # ─────────────────────────────────────────────────────────────
    async def post_income(self, transaction: dict) -> dict:
        """
        transaction = {
            "id": int,
            "amount": float,
            "category": str,  # e.g. "School Fees"
            "description": str,
            "transaction_date": str,  # YYYY-MM-DD
            "qb_account_id": str,     # bank account QBO ID
            "customer_ref": str (optional)
        }
        """
        tokens = await self._get_valid_tokens()
        realm_id = tokens["realm_id"]
        access_token = tokens["access_token"]

        qbo_account_name = INCOME_CATEGORY_MAP.get(
            transaction["category"], transaction["category"]
        )

        payload = {
            "TotalAmt": transaction["amount"],
            "TxnDate":  transaction["transaction_date"],
            "PrivateNote": transaction.get("description", ""),
            "Line": [
                {
                    "Amount":          transaction["amount"],
                    "DetailType":      "SalesItemLineDetail",
                    "SalesItemLineDetail": {
                        "ItemRef": {"name": qbo_account_name},
                    },
                }
            ],
            "DepositToAccountRef": {
                "value": transaction.get("qb_account_id", "1"),
            },
        }

        if transaction.get("customer_ref"):
            payload["CustomerRef"] = {"value": transaction["customer_ref"]}

        result = await self._post_to_qbo(
            realm_id, access_token,
            "salesreceipt", payload,
            transaction_id=transaction["id"]
        )
        return result

    # ─────────────────────────────────────────────────────────────
    # STEP 4: POST EXPENSE → QBO Expense
    # ─────────────────────────────────────────────────────────────
    async def post_expense(self, transaction: dict) -> dict:
        """
        transaction = {
            "id": int,
            "amount": float,
            "category": str,  # e.g. "Salaries"
            "description": str,
            "transaction_date": str,
            "qb_account_id": str,     # bank account QBO ID
        }
        """
        tokens = await self._get_valid_tokens()
        realm_id = tokens["realm_id"]
        access_token = tokens["access_token"]

        qbo_account_name = EXPENSE_CATEGORY_MAP.get(
            transaction["category"], transaction["category"]
        )

        payload = {
            "TotalAmt":  transaction["amount"],
            "TxnDate":   transaction["transaction_date"],
            "PrivateNote": transaction.get("description", ""),
            "AccountRef": {
                "value": transaction.get("qb_account_id", "1"),
            },
            "Line": [
                {
                    "Amount":      transaction["amount"],
                    "DetailType":  "AccountBasedExpenseLineDetail",
                    "AccountBasedExpenseLineDetail": {
                        "AccountRef": {"name": qbo_account_name},
                    },
                }
            ],
        }

        result = await self._post_to_qbo(
            realm_id, access_token,
            "purchase", payload,
            transaction_id=transaction["id"]
        )
        return result

    # ─────────────────────────────────────────────────────────────
    # REFRESH TOKENS
    # ─────────────────────────────────────────────────────────────
    async def refresh_tokens(self) -> dict:
        tokens = await self._load_connection()
        if not tokens:
            raise Exception("No QBO connection found for this portal")

        credentials = base64.b64encode(
            f"{self.client_id}:{self.client_secret}".encode()
        ).decode()

        async with httpx.AsyncClient() as client:
            response = await client.post(
                settings.QBO_TOKEN_URL,
                headers={
                    "Authorization": f"Basic {credentials}",
                    "Content-Type":  "application/x-www-form-urlencoded",
                    "Accept":        "application/json",
                },
                data={
                    "grant_type":    "refresh_token",
                    "refresh_token": tokens["refresh_token"],
                },
            )

        if response.status_code != 200:
            logger.error(f"[QBO] Token refresh failed: {response.text}")
            raise Exception(f"Token refresh failed: {response.text}")

        token_data = response.json()
        new_expires = datetime.utcnow() + timedelta(
            seconds=token_data.get("expires_in", 3600)
        )

        logger.info(f"[QBO] Tokens refreshed for portal {self.portal_id}")

        if self.db:
            await self._update_tokens(
                token_data["access_token"],
                token_data["refresh_token"],
                new_expires,
            )

        return {"status": "refreshed", "expires_at": new_expires.isoformat()}

    # ─────────────────────────────────────────────────────────────
    # RETRY FAILED SYNCS
    # ─────────────────────────────────────────────────────────────
    async def retry_failed_syncs(self) -> dict:
        if not self.db:
            raise Exception("Database session required")

        from sqlalchemy import text
        result = await self.db.execute(
            text("""
                SELECT id, type, category, amount, description,
                       transaction_date, bank_account_id
                FROM transactions
                WHERE portal_id = :portal_id
                  AND qb_sync_status = 'FAILED'
                  AND is_reversed = FALSE
                ORDER BY created_at ASC
                LIMIT 50
            """),
            {"portal_id": self.portal_id}
        )
        failed = result.fetchall()

        retried = 0
        errors = []

        for txn in failed:
            try:
                txn_dict = dict(txn._mapping)
                if txn_dict["type"] == "INCOME":
                    await self.post_income(txn_dict)
                else:
                    await self.post_expense(txn_dict)
                retried += 1
            except Exception as e:
                errors.append({"transaction_id": txn_dict["id"], "error": str(e)})

        logger.info(f"[QBO] Retry: {retried} synced, {len(errors)} still failed")
        return {"retried": retried, "errors": errors}

    # ─────────────────────────────────────────────────────────────
    # GET QBO ACCOUNTS (Chart of Accounts)
    # ─────────────────────────────────────────────────────────────
    async def get_qbo_accounts(self) -> list:
        tokens = await self._get_valid_tokens()
        realm_id = tokens["realm_id"]
        access_token = tokens["access_token"]

        url = (
            f"{settings.QBO_API_BASE}/v3/company/{realm_id}"
            "/query?query=select * from Account&minorversion=65"
        )

        async with httpx.AsyncClient() as client:
            response = await client.get(
                url,
                headers={
                    "Authorization": f"Bearer {access_token}",
                    "Accept": "application/json",
                },
            )

        if response.status_code != 200:
            raise Exception(f"Failed to fetch accounts: {response.text}")

        data = response.json()
        accounts = data.get("QueryResponse", {}).get("Account", [])
        return [
            {
                "id":   acc["Id"],
                "name": acc["Name"],
                "type": acc["AccountType"],
            }
            for acc in accounts
        ]

    # ─────────────────────────────────────────────────────────────
    # PRIVATE HELPERS
    # ─────────────────────────────────────────────────────────────
    async def _post_to_qbo(
        self, realm_id: str, access_token: str,
        entity: str, payload: dict, transaction_id: int
    ) -> dict:
        url = (
            f"{settings.QBO_API_BASE}/v3/company/{realm_id}"
            f"/{entity}?minorversion=65"
        )

        async with httpx.AsyncClient() as client:
            response = await client.post(
                url,
                headers={
                    "Authorization": f"Bearer {access_token}",
                    "Content-Type":  "application/json",
                    "Accept":        "application/json",
                },
                json=payload,
            )

        success = response.status_code in (200, 201)
        resp_data = response.json() if response.text else {}

        # Log sync attempt
        if self.db:
            await self._log_sync(
                transaction_id=transaction_id,
                status="SUCCESS" if success else "FAILED",
                request_payload=payload,
                response_payload=resp_data,
                http_status=response.status_code,
                error=None if success else response.text,
            )

        if not success:
            logger.error(f"[QBO] Failed to post {entity}: {response.text}")
            raise Exception(f"QBO post failed ({response.status_code}): {response.text}")

        logger.info(f"[QBO] Posted {entity} successfully for transaction {transaction_id}")

        # Extract the QBO entity ID
        entity_map = {
            "salesreceipt": "SalesReceipt",
            "purchase":     "Purchase",
        }
        qbo_key = entity_map.get(entity, entity.capitalize())
        qbo_entity = resp_data.get(qbo_key, {})

        return {
            "qb_entity_id":   qbo_entity.get("Id"),
            "qb_entity_type": qbo_key,
            "status":         "SYNCED",
        }

    async def _get_valid_tokens(self) -> dict:
        tokens = await self._load_connection()
        if not tokens:
            raise Exception(f"No active QBO connection for portal {self.portal_id}")

        # Auto-refresh if access token expires in < 5 minutes
        expires_at = tokens["token_expires_at"]
        if isinstance(expires_at, str):
            expires_at = datetime.fromisoformat(expires_at)

        if expires_at - datetime.utcnow() < timedelta(minutes=5):
            logger.info(f"[QBO] Token expiring soon, refreshing for portal {self.portal_id}")
            await self.refresh_tokens()
            tokens = await self._load_connection()

        return tokens

    async def _load_connection(self) -> Optional[dict]:
        if not self.db:
            return None
        from sqlalchemy import text
        result = await self.db.execute(
            text("""
                SELECT realm_id, access_token, refresh_token,
                       token_expires_at, refresh_expires_at, environment
                FROM quickbooks_connections
                WHERE portal_id = :portal_id
                  AND environment = :env
                  AND is_active = TRUE
                LIMIT 1
            """),
            {"portal_id": self.portal_id, "env": self.environment}
        )
        row = result.fetchone()
        return dict(row._mapping) if row else None

    async def _save_connection(self, data: dict):
        from sqlalchemy import text
        await self.db.execute(
            text("""
                INSERT INTO quickbooks_connections
                    (portal_id, realm_id, access_token, refresh_token,
                     token_expires_at, refresh_expires_at, environment, is_active, connected_at)
                VALUES
                    (:portal_id, :realm_id, :access_token, :refresh_token,
                     :token_expires_at, :refresh_expires_at, :environment, TRUE, NOW())
                ON CONFLICT (portal_id, environment)
                DO UPDATE SET
                    realm_id = EXCLUDED.realm_id,
                    access_token = EXCLUDED.access_token,
                    refresh_token = EXCLUDED.refresh_token,
                    token_expires_at = EXCLUDED.token_expires_at,
                    refresh_expires_at = EXCLUDED.refresh_expires_at,
                    is_active = TRUE,
                    updated_at = NOW()
            """),
            data
        )
        await self.db.commit()

    async def _update_tokens(
        self, access_token: str, refresh_token: str, expires_at: datetime
    ):
        from sqlalchemy import text
        await self.db.execute(
            text("""
                UPDATE quickbooks_connections
                SET access_token = :access_token,
                    refresh_token = :refresh_token,
                    token_expires_at = :expires_at,
                    updated_at = NOW()
                WHERE portal_id = :portal_id
                  AND environment = :env
                  AND is_active = TRUE
            """),
            {
                "access_token":  access_token,
                "refresh_token": refresh_token,
                "expires_at":    expires_at,
                "portal_id":     self.portal_id,
                "env":           self.environment,
            }
        )
        await self.db.commit()

    async def _log_sync(
        self, transaction_id: int, status: str,
        request_payload: dict, response_payload: dict,
        http_status: int, error: Optional[str]
    ):
        from sqlalchemy import text
        import json
        await self.db.execute(
            text("""
                INSERT INTO quickbooks_sync_logs
                    (transaction_id, portal_id, status,
                     request_payload, response_payload,
                     http_status_code, error_message, attempted_at)
                VALUES
                    (:txn_id, :portal_id, :status,
                     :req::jsonb, :resp::jsonb,
                     :http_status, :error, NOW())
            """),
            {
                "txn_id":      transaction_id,
                "portal_id":   self.portal_id,
                "status":      status,
                "req":         json.dumps(request_payload),
                "resp":        json.dumps(response_payload),
                "http_status": http_status,
                "error":       error,
            }
        )
        await self.db.commit()
