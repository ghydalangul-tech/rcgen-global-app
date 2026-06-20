"""RCGEN Backend Configuration"""

from pydantic_settings import BaseSettings
from typing import List


class Settings(BaseSettings):
    # Database
    DATABASE_URL: str = "postgresql+asyncpg://user:password@localhost:5432/rcgen"

    # Azure AD B2C
    AZURE_TENANT_ID: str = ""
    AZURE_CLIENT_ID: str = ""
    AZURE_B2C_POLICY: str = "B2C_1_signupsignin"
    AZURE_B2C_DOMAIN: str = ""  # e.g. rcgenauth.b2clogin.com

    # QuickBooks
    QBO_CLIENT_ID: str = ""
    QBO_CLIENT_SECRET: str = ""
    QBO_REDIRECT_URI: str = "https://your-backend/api/v1/qbo/callback"
    QBO_ENVIRONMENT: str = "sandbox"  # sandbox or production
    QBO_SCOPE: str = "com.intuit.quickbooks.accounting"

    # QuickBooks OAuth URLs
    QBO_AUTH_URL: str = "https://appcenter.intuit.com/connect/oauth2"
    QBO_TOKEN_URL: str = "https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer"
    QBO_REVOKE_URL: str = "https://developer.api.intuit.com/v2/oauth2/tokens/revoke"

    @property
    def QBO_API_BASE(self) -> str:
        if self.QBO_ENVIRONMENT == "production":
            return "https://quickbooks.api.intuit.com"
        return "https://sandbox-quickbooks.api.intuit.com"

    # Firebase
    FIREBASE_PROJECT_ID: str = "rcgen-educare-acc"
    FIREBASE_CREDENTIALS_PATH: str = ""

    # App
    SECRET_KEY: str = "change-this-secret-key"
    ALLOWED_ORIGINS: List[str] = [
        "http://localhost:3000",
        "https://rcgen.org.za",
    ]
    EDUCARE_PORTAL_ID: int = 1

    class Config:
        env_file = ".env"
        case_sensitive = True


settings = Settings()
