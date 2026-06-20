"""
RCGEN QuickBooks API Endpoints
Handles OAuth connect, callback, status, retry
"""

from fastapi import APIRouter, Depends, HTTPException, Request
from fastapi.responses import RedirectResponse
from sqlalchemy.ext.asyncio import AsyncSession

from src.database import get_db
from src.services.qb_service import QuickBooksService

router = APIRouter()


@router.get("/connect/{portal_id}")
async def connect_quickbooks(portal_id: int):
    """Start QuickBooks OAuth flow for a portal"""
    svc = QuickBooksService(portal_id=portal_id)
    auth_url = svc.start_oauth_flow()
    return {"auth_url": auth_url, "portal_id": portal_id}


@router.get("/callback")
async def qbo_callback(
    code: str,
    state: str,
    realmId: str,
    request: Request,
    db: AsyncSession = Depends(get_db),
):
    """
    Intuit redirects here after user authorizes.
    state = portal_id (set in start_oauth_flow)
    realmId = QuickBooks Company ID — SAVE THIS
    """
    try:
        portal_id = int(state)
    except (ValueError, TypeError):
        raise HTTPException(status_code=400, detail="Invalid state parameter")

    svc = QuickBooksService(portal_id=portal_id, db=db)

    try:
        result = await svc.oauth_callback(code=code, realm_id=realmId)
        return {
            "message":    "QuickBooks connected successfully!",
            "portal_id":  portal_id,
            "realm_id":   realmId,                  # ← SAVE THIS VALUE
            "environment": result["environment"],
            "expires_at": result["token_expires_at"],
        }
    except Exception as e:
        raise HTTPException(status_code=400, detail=str(e))


@router.get("/status/{portal_id}")
async def qbo_status(portal_id: int, db: AsyncSession = Depends(get_db)):
    """Check QuickBooks connection status for a portal"""
    from sqlalchemy import text
    from datetime import datetime

    result = await db.execute(
        text("""
            SELECT realm_id, environment, is_active,
                   token_expires_at, refresh_expires_at,
                   connected_at, last_synced_at
            FROM quickbooks_connections
            WHERE portal_id = :portal_id
              AND is_active = TRUE
            LIMIT 1
        """),
        {"portal_id": portal_id}
    )
    row = result.fetchone()

    if not row:
        return {"connected": False, "portal_id": portal_id}

    data = dict(row._mapping)
    expires_at = data["token_expires_at"]
    if isinstance(expires_at, str):
        from datetime import datetime
        expires_at = datetime.fromisoformat(expires_at)

    token_valid = expires_at > datetime.utcnow()

    return {
        "connected":     True,
        "realm_id":      data["realm_id"],
        "environment":   data["environment"],
        "token_valid":   token_valid,
        "expires_at":    data["token_expires_at"],
        "last_synced_at": data["last_synced_at"],
    }


@router.post("/refresh/{portal_id}")
async def refresh_tokens(portal_id: int, db: AsyncSession = Depends(get_db)):
    """Manually refresh QBO tokens for a portal"""
    svc = QuickBooksService(portal_id=portal_id, db=db)
    try:
        result = await svc.refresh_tokens()
        return result
    except Exception as e:
        raise HTTPException(status_code=400, detail=str(e))


@router.post("/retry-failed/{portal_id}")
async def retry_failed(portal_id: int, db: AsyncSession = Depends(get_db)):
    """Retry all FAILED transactions for a portal"""
    svc = QuickBooksService(portal_id=portal_id, db=db)
    try:
        result = await svc.retry_failed_syncs()
        return result
    except Exception as e:
        raise HTTPException(status_code=400, detail=str(e))


@router.get("/accounts/{portal_id}")
async def get_accounts(portal_id: int, db: AsyncSession = Depends(get_db)):
    """Get QuickBooks Chart of Accounts for a portal"""
    svc = QuickBooksService(portal_id=portal_id, db=db)
    try:
        accounts = await svc.get_qbo_accounts()
        return {"accounts": accounts, "count": len(accounts)}
    except Exception as e:
        raise HTTPException(status_code=400, detail=str(e))


@router.delete("/disconnect/{portal_id}")
async def disconnect_qbo(portal_id: int, db: AsyncSession = Depends(get_db)):
    """Disconnect QuickBooks from a portal"""
    from sqlalchemy import text
    await db.execute(
        text("""
            UPDATE quickbooks_connections
            SET is_active = FALSE, updated_at = NOW()
            WHERE portal_id = :portal_id
        """),
        {"portal_id": portal_id}
    )
    await db.commit()
    return {"message": "QuickBooks disconnected", "portal_id": portal_id}
