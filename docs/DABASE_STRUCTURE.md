# RCGEN GLOBAL APP – FIREBASE DATABASE STRUCTURE

## Overview

RCGEN is a 4-in-1 system with separate portals:

1. Core Governance
2. Educare
3. Church
4. Foundation

The database must isolate data per portal while sharing user authentication.

---

# ROOT COLLECTIONS

/users
/portals
/roles
/activities
/notifications

---

# USERS COLLECTION

/users/{userId}

Fields:
- fullName
- email
- phone
- role
- assignedPortal
- isActive
- createdAt

Example:
assignedPortal: "educare"
role: "teacher"

---

# PORTALS COLLECTION

/portals/{portalId}

Portal IDs:
- core
- educare
- church
- foundation

Fields:
- name
- description
- isActive

---

# ROLE STRUCTURE

/roles/{roleId}

Examples:
- ceo
- director
- principal
- teacher
- pastor
- foundation_manager
- volunteer
- finance_officer

Fields:
- portal
- permissions (array)
- level

---

# EDUCATE DATA

/educare/students
/educare/classes
/educare/attendance
/educare/fees

---

# CHURCH DATA

/church/members
/church/events
/church/donations
/church/prayer_requests

---

# FOUNDATION DATA

/foundation/beneficiaries
/foundation/donations
/foundation/volunteers
/foundation/projects

---

# CORE DATA

/core/reports
/core/compliance
/core/finance_summary
/core/risk_alerts

---

# ACTIVITY LOG

/activities/{activityId}

Fields:
- userId
- portal
- action
- timestamp

---

# SECURITY PRINCIPLE

- Users can only access data where:
  user.assignedPortal == request.portal
- Core governance can read all.
- Role-based permission enforcement required.
