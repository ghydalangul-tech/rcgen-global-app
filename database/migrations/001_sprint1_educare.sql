-- ============================================================
-- RCGEN 4-in-1 Accounting System
-- Sprint 1: Educare Portal Base Tables
-- Organization: Revival Christian Group Children of All Nations
-- Website: https://rcgen.org.za
-- ============================================================

-- Enable UUID extension
CREATE EXTENSION IF NOT EXISTS "pgcrypto";

-- ============================================================
-- TABLE: portals
-- ============================================================
CREATE TABLE IF NOT EXISTS portals (
    id          SERIAL PRIMARY KEY,
    name        VARCHAR(100) NOT NULL UNIQUE,
    slug        VARCHAR(50)  NOT NULL UNIQUE,
    status      VARCHAR(20)  NOT NULL DEFAULT 'active'
                CHECK (status IN ('active', 'inactive')),
    qb_status   VARCHAR(20)  NOT NULL DEFAULT 'sandbox'
                CHECK (qb_status IN ('sandbox', 'production', 'disconnected')),
    created_at  TIMESTAMP NOT NULL DEFAULT NOW(),
    updated_at  TIMESTAMP NOT NULL DEFAULT NOW()
);

-- ============================================================
-- TABLE: roles
-- ============================================================
CREATE TABLE IF NOT EXISTS roles (
    id          SERIAL PRIMARY KEY,
    name        VARCHAR(50) NOT NULL UNIQUE,
    permissions JSONB       NOT NULL DEFAULT '{}',
    created_at  TIMESTAMP   NOT NULL DEFAULT NOW()
);

-- ============================================================
-- TABLE: users
-- ============================================================
CREATE TABLE IF NOT EXISTS users (
    id          SERIAL PRIMARY KEY,
    portal_id   INT         NOT NULL REFERENCES portals(id) ON DELETE CASCADE,
    role_id     INT         NOT NULL REFERENCES roles(id),
    azure_oid   VARCHAR(100) UNIQUE,          -- Azure AD B2C Object ID
    email       VARCHAR(255) NOT NULL UNIQUE,
    full_name   VARCHAR(150),
    is_active   BOOLEAN     NOT NULL DEFAULT TRUE,
    last_login  TIMESTAMP,
    created_at  TIMESTAMP   NOT NULL DEFAULT NOW(),
    updated_at  TIMESTAMP   NOT NULL DEFAULT NOW()
);

-- ============================================================
-- TABLE: portal_bank_accounts
-- ============================================================
CREATE TABLE IF NOT EXISTS portal_bank_accounts (
    id              SERIAL PRIMARY KEY,
    portal_id       INT          NOT NULL REFERENCES portals(id) ON DELETE CASCADE,
    account_name    VARCHAR(150) NOT NULL,
    account_number  VARCHAR(50),
    bank_name       VARCHAR(100),
    is_default      BOOLEAN      NOT NULL DEFAULT FALSE,
    qb_account_id   VARCHAR(50),             -- QuickBooks Account ID
    qb_account_name VARCHAR(150),            -- QuickBooks Account Name
    is_active       BOOLEAN      NOT NULL DEFAULT TRUE,
    created_by      INT          REFERENCES users(id),
    created_at      TIMESTAMP    NOT NULL DEFAULT NOW(),
    updated_at      TIMESTAMP    NOT NULL DEFAULT NOW()
);

-- Only one default bank account per portal
CREATE UNIQUE INDEX IF NOT EXISTS idx_one_default_bank_per_portal
    ON portal_bank_accounts (portal_id)
    WHERE is_default = TRUE AND is_active = TRUE;

-- ============================================================
-- TABLE: quickbooks_connections
-- ============================================================
CREATE TABLE IF NOT EXISTS quickbooks_connections (
    id                  SERIAL PRIMARY KEY,
    portal_id           INT         NOT NULL REFERENCES portals(id) ON DELETE CASCADE,
    realm_id            VARCHAR(50) NOT NULL,
    access_token        TEXT        NOT NULL,
    refresh_token       TEXT        NOT NULL,
    token_expires_at    TIMESTAMP   NOT NULL,
    refresh_expires_at  TIMESTAMP,              -- New in 2026: track refresh expiry
    environment         VARCHAR(20) NOT NULL DEFAULT 'sandbox'
                        CHECK (environment IN ('sandbox', 'production')),
    is_active           BOOLEAN     NOT NULL DEFAULT TRUE,
    connected_by        INT         REFERENCES users(id),
    connected_at        TIMESTAMP   NOT NULL DEFAULT NOW(),
    last_synced_at      TIMESTAMP,
    updated_at          TIMESTAMP   NOT NULL DEFAULT NOW(),
    UNIQUE (portal_id, environment)
);

-- ============================================================
-- TABLE: transactions
-- ============================================================
CREATE TABLE IF NOT EXISTS transactions (
    id                  SERIAL PRIMARY KEY,
    portal_id           INT             NOT NULL REFERENCES portals(id) ON DELETE CASCADE,
    bank_account_id     INT             REFERENCES portal_bank_accounts(id),
    type                VARCHAR(10)     NOT NULL CHECK (type IN ('INCOME', 'EXPENSE')),
    category            VARCHAR(100)    NOT NULL,
    amount              DECIMAL(12, 2)  NOT NULL CHECK (amount > 0),
    description         TEXT,
    reference_number    VARCHAR(100),
    transaction_date    DATE            NOT NULL,
    qb_sync_status      VARCHAR(20)     NOT NULL DEFAULT 'PENDING'
                        CHECK (qb_sync_status IN ('PENDING', 'SYNCED', 'FAILED', 'REVERSED')),
    qb_entity_id        VARCHAR(50),             -- QuickBooks SalesReceipt/Expense ID
    qb_entity_type      VARCHAR(50),             -- 'SalesReceipt' or 'Expense'
    is_reversed         BOOLEAN         NOT NULL DEFAULT FALSE,
    reversed_by         INT             REFERENCES users(id),
    reversed_at         TIMESTAMP,
    reversal_reason     TEXT,
    created_by          INT             REFERENCES users(id),
    created_at          TIMESTAMP       NOT NULL DEFAULT NOW(),
    updated_at          TIMESTAMP       NOT NULL DEFAULT NOW()
);

-- Indexes for transaction queries
CREATE INDEX IF NOT EXISTS idx_transactions_portal ON transactions(portal_id);
CREATE INDEX IF NOT EXISTS idx_transactions_date ON transactions(transaction_date);
CREATE INDEX IF NOT EXISTS idx_transactions_status ON transactions(qb_sync_status);
CREATE INDEX IF NOT EXISTS idx_transactions_type ON transactions(type);

-- ============================================================
-- TABLE: quickbooks_sync_logs
-- ============================================================
CREATE TABLE IF NOT EXISTS quickbooks_sync_logs (
    id                  SERIAL PRIMARY KEY,
    transaction_id      INT         NOT NULL REFERENCES transactions(id),
    portal_id           INT         NOT NULL REFERENCES portals(id),
    attempt_number      INT         NOT NULL DEFAULT 1,
    status              VARCHAR(20) NOT NULL CHECK (status IN ('SUCCESS', 'FAILED', 'RETRY')),
    request_payload     JSONB,
    response_payload    JSONB,
    error_message       TEXT,
    http_status_code    INT,
    attempted_at        TIMESTAMP   NOT NULL DEFAULT NOW()
);

CREATE INDEX IF NOT EXISTS idx_sync_logs_transaction ON quickbooks_sync_logs(transaction_id);
CREATE INDEX IF NOT EXISTS idx_sync_logs_portal ON quickbooks_sync_logs(portal_id);
CREATE INDEX IF NOT EXISTS idx_sync_logs_status ON quickbooks_sync_logs(status);

-- ============================================================
-- TABLE: audit_logs
-- ============================================================
CREATE TABLE IF NOT EXISTS audit_logs (
    id          SERIAL PRIMARY KEY,
    portal_id   INT         REFERENCES portals(id),
    user_id     INT         REFERENCES users(id),
    action      VARCHAR(50) NOT NULL,   -- CREATE, UPDATE, REVERSE, LOGIN, CONNECT_QB
    entity_type VARCHAR(50),            -- transaction, bank_account, user, qb_connection
    entity_id   INT,
    old_values  JSONB,
    new_values  JSONB,
    ip_address  VARCHAR(45),
    user_agent  TEXT,
    created_at  TIMESTAMP   NOT NULL DEFAULT NOW()
);

CREATE INDEX IF NOT EXISTS idx_audit_logs_portal ON audit_logs(portal_id);
CREATE INDEX IF NOT EXISTS idx_audit_logs_user ON audit_logs(user_id);
CREATE INDEX IF NOT EXISTS idx_audit_logs_created ON audit_logs(created_at);

-- ============================================================
-- TABLE: attachments
-- ============================================================
CREATE TABLE IF NOT EXISTS attachments (
    id              SERIAL PRIMARY KEY,
    transaction_id  INT          NOT NULL REFERENCES transactions(id) ON DELETE CASCADE,
    file_name       VARCHAR(255) NOT NULL,
    file_url        TEXT         NOT NULL,   -- Firebase Storage URL
    file_size       INT,                     -- bytes
    mime_type       VARCHAR(100),
    uploaded_by     INT          REFERENCES users(id),
    created_at      TIMESTAMP    NOT NULL DEFAULT NOW()
);

-- ============================================================
-- SEED DATA: Sprint 1 - Educare Portal Only
-- ============================================================

-- Portals
INSERT INTO portals (name, slug, status, qb_status) VALUES
    ('RCGEN Educare',    'educare',    'active', 'sandbox'),
    ('RCGEN Church',     'church',     'active', 'disconnected'),
    ('RCGEN Foundation', 'foundation', 'active', 'disconnected'),
    ('RCGEN Group',      'group',      'active', 'disconnected')
ON CONFLICT (name) DO NOTHING;

-- Roles
INSERT INTO roles (name, permissions) VALUES
    ('Super Admin',  '{"all": true}'),
    ('Portal Admin', '{"manage_users": true, "manage_qbo": true, "manage_bank_accounts": true, "manage_transactions": true, "view_reports": true}'),
    ('Accountant',   '{"manage_transactions": true, "view_reports": true}'),
    ('Viewer',       '{"read_only": true, "view_reports": true}')
ON CONFLICT (name) DO NOTHING;

-- ============================================================
-- INCOME CATEGORIES: Educare
-- ============================================================
-- Used as CHECK constraint reference (enforce in app layer):
-- 'School Fees', 'Registration Fees', 'Donations', 'Sponsorships'

-- ============================================================
-- EXPENSE CATEGORIES: Educare
-- ============================================================
-- Used as CHECK constraint reference (enforce in app layer):
-- 'Salaries', 'Utilities', 'Rent', 'Food', 'Cleaning Supplies',
-- 'Transport', 'Maintenance', 'Bank Charges'

-- ============================================================
-- VERIFICATION QUERIES (run after migration)
-- ============================================================
-- SELECT * FROM portals;
-- SELECT * FROM roles;
-- SELECT COUNT(*) FROM portals;   -- Should be 4
-- SELECT COUNT(*) FROM roles;     -- Should be 4
