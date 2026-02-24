# LOGIN SCREEN SPEC (RCGEN Global App)

## Purpose
Provide a secure, simple login flow that changes automatically depending on the selected portal:
- Core Governance
- Educare (School)
- Church
- Foundation

This screen is opened after the user selects a portal on the Portal Selector Screen.

---

## Entry Point
Route: `LoginScreen(selectedPortal)`

`selectedPortal` values:
- core
- educare
- church
- foundation

---

## UI Layout (Mobile First)
1) Header
- Title: “Login”
- Subtitle: “RCGEN Global App • {Portal Name} Portal”
  Examples:
  - “RCGEN Global App • Educare Portal”
  - “RCGEN Global App • Church Portal”

2) Identity Input
- Label: “Email or Phone”
- Placeholder: “name@email.com or 07XXXXXXXX”
- Input validation:
  - If contains “@” → treat as email
  - If numeric + starts with 0 or +27 → treat as phone

3) Password Input
- Label: “Password”
- Toggle show/hide password

4) Primary Button
- Button text: “Sign in”
- Disabled until fields are valid

5) Secondary Actions
- Link: “Forgot password?”
- Link: “Create account / Register”
- Link: “Back to portal selection”

6) Portal Helper (Small text)
- “You are signing into the {Portal Name} portal.”

---

## Portal Rules (Role-Based Access)
### Core Governance Portal
Allowed roles:
- Super Admin
- CEO
- Board Member
- Compliance / Governance Officer
- Finance Admin (Core)

### Educare Portal (School Management)
Allowed roles:
- Principal
- Administrator
- Teacher / Practitioner
- Parent / Guardian (limited view)
- Finance Clerk (Educare)

### Church Portal (Church Management)
Allowed roles:
- Apostle / Pastor (Admin)
- Church Admin
- Finance / Treasurer
- Cell Group / Department Leader
- Member (limited view)

### Foundation Portal (Foundation / Feeding Scheme)
Allowed roles:
- Foundation Admin
- Volunteer Coordinator
- Volunteers (limited view)
- Donations & Finance (Foundation)
- Program Officer

IMPORTANT:
- A user may have access to multiple portals.
- Access is granted by role mapping in the database.
- If user logs in successfully but has NO permission for selected portal → show “Access denied” message + button “Switch Portal”.

---

## Authentication Options (Phase Plan)
### Phase 1 (Simple + Fast)
- Email + Password login
- Phone login allowed only if linked to an account (same password)

### Phase 2 (More Secure)
- Add OTP verification for phone
- Add email verification
- Optional: Microsoft / Google sign-in for staff

---

## Error Handling (Clear Messages)
- Wrong password:
  “Incorrect password. Please try again.”
- User not found:
  “Account not found. Please register or check your details.”
- No portal permission:
  “You don’t have access to this portal. Switch portal or contact admin.”
- Too many attempts:
  “Too many attempts. Please wait 5 minutes and try again.”

---

## Forgot Password Flow
1) User taps “Forgot password?”
2) Screen asks:
- “Email or Phone”
3) Send reset:
- Email reset link OR SMS OTP (Phase 2)
4) Confirmation message:
“Reset instructions have been sent.”

---

## Register / Create Account Flow (Portal-Based)
When user taps “Create account / Register”:
- If Educare portal → show child/parent registration option and staff registration option
- If Church portal → show member registration and leader registration (approval required)
- If Foundation portal → show volunteer registration and donor profile option
- If Core portal → registration is invite-only (admin creates account)

All registration submissions must send to:
- info@rcgen.org.za

---

## Security Requirements
- Password minimum: 8 characters
- Lockout: after 8 failed attempts (temporary)
- Store tokens securely
- Log sign-in activity (portal + time + device)

---

## Post Login Destination (Where user goes after sign in)
After successful login:
Navigate to: `PortalDashboard(selectedPortal, userRole)`

Examples:
- Educare Principal → Educare Admin Dashboard
- Church Member → Church Member Home
- Foundation Volunteer → Volunteer Tasks Page
- Core CEO → Core Governance Dashboard

---

## Admin Notes (For RCGEN Team)
- Each portal has its own navigation menu, but shares one app.
- Permissions must be checked on:
  1) Login success
  2) Every protected page (server rules)
- Keep the portal switch visible in Settings for users with multiple access.

END
