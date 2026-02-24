# CORE DASHBOARD SPEC (RCGEN Global App) — TEST VERSION

## Purpose
This document is a TEST dashboard specification to confirm:
- GitHub file creation works
- Commit works
- RCGEN docs structure is correct
Later we will replace this test with the full final dashboard spec.

---

## Portals (4-in-1)
RCGEN has 4 portals (different login portals inside one app):
1. Core Governance
2. Educare (School)
3. Church
4. Foundation

---

## Dashboard Rules (TEST)
### After Login
- If user logs in successfully, redirect to the correct dashboard for their portal.
- Route example:
  - Core → `/core/dashboard`
  - Educare → `/educare/dashboard`
  - Church → `/church/dashboard`
  - Foundation → `/foundation/dashboard`

### Minimum Widgets (TEST)
Each dashboard must show:
- Welcome text (User name + portal name)
- Quick actions (3 buttons)
- Notifications panel
- Latest activity list

---

## TEST Quick Actions
### Core Governance
- Create Task
- View Reports
- View Policies

### Educare
- Register Child
- Attendance
- Fees / Payments

### Church
- Add Member
- Service Schedule
- Donations / Tithes

### Foundation
- Register Beneficiary
- Donations Received
- Volunteer List

---

## Data (TEST)
Each portal dashboard reads from Firestore collections:
- `/users`
- `/portals`
- `/notifications`
- `/activities`

---

## Status
✅ TEST file created for verification.
Next step: Replace with full detailed dashboard specification.
