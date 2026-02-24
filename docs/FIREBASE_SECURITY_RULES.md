# FIREBASE SECURITY RULES (RCGEN Global App)

## Purpose

Define role-based access control for the RCGEN 4-in-1 system.

---

## User Roles

Each user will have:

- uid
- portal (core | educare | church | foundation)
- role (admin | manager | staff | parent | member)

---

## Access Model

### 1. CORE Portal
- Full read/write access to all collections
- Can manage users across portals

### 2. EDUCARE Portal
- Access only to:
  - children
  - classes
  - attendance
  - school_finance
- Cannot access church or foundation data

### 3. CHURCH Portal
- Access only to:
  - members
  - events
  - offerings
  - sermons

### 4. FOUNDATION Portal
- Access only to:
  - beneficiaries
  - donations
  - projects

---

## Enforcement Strategy

All Firestore reads/writes must validate:

1. User is authenticated
2. User.portal matches collection
3. User.role has permission level

---

## Core Principle

Portal Isolation + Role-Based Control

Security must never rely only on frontend logic.
All protection must be enforced in Firestore rules.
