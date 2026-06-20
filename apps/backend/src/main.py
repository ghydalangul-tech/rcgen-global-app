"""
RCGEN 4-in-1 Accounting System
FastAPI Backend - Main Entry Point
Organization: Revival Christian Group Children of All Nations
"""

from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware
from contextlib import asynccontextmanager
import logging

from src.config import settings
from src.database import init_db
from src.api.v1 import auth, portals, bank_accounts, transactions, quickbooks, audit_logs

logging.basicConfig(level=logging.INFO)
logger = logging.getLogger(__name__)


@asynccontextmanager
async def lifespan(app: FastAPI):
    logger.info("🚀 RCGEN Backend starting up...")
    await init_db()
    yield
    logger.info("🛑 RCGEN Backend shutting down...")


app = FastAPI(
    title="RCGEN Accounting System API",
    description="4-in-1 Accounting & Administration System for RCGEN",
    version="1.0.0",
    lifespan=lifespan,
)

# CORS - allow Flutter app and web
app.add_middleware(
    CORSMiddleware,
    allow_origins=settings.ALLOWED_ORIGINS,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# Routers
app.include_router(auth.router,          prefix="/api/v1/auth",          tags=["Auth"])
app.include_router(portals.router,       prefix="/api/v1/portals",       tags=["Portals"])
app.include_router(bank_accounts.router, prefix="/api/v1/bank-accounts", tags=["Bank Accounts"])
app.include_router(transactions.router,  prefix="/api/v1/transactions",  tags=["Transactions"])
app.include_router(quickbooks.router,    prefix="/api/v1/qbo",           tags=["QuickBooks"])
app.include_router(audit_logs.router,    prefix="/api/v1/audit",         tags=["Audit Logs"])


@app.get("/")
async def root():
    return {
        "app": "RCGEN Accounting System",
        "version": "1.0.0",
        "status": "running",
        "organization": "Revival Christian Group Children of All Nations",
        "website": "https://rcgen.org.za",
    }


@app.get("/health")
async def health():
    return {"status": "healthy"}
