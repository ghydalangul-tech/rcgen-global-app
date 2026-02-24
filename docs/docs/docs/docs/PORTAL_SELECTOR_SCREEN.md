# Portal Selector Screen (RCGEN 4-in-1)

## Screen Name
PortalSelectorScreen

## Purpose
Let the user choose which RCGEN system they are entering before login.

## UI Layout
1. RCGEN Logo + Title: “Welcome to RCGEN”
2. Subtitle: “Choose your portal”
3. 4 large cards/buttons (with icon + short description):

### 1) Educare Portal
- Label: Educare
- Description: Children, Classes, Attendance, Fees, Parent & Teacher access

### 2) Church Portal
- Label: Church
- Description: Members, Events, Giving, Sermons, Ministry teams

### 3) Foundation Portal
- Label: Foundation
- Description: Donations, Feeding scheme, Beneficiaries, Volunteers

### 4) Core / Governance Portal
- Label: Core
- Description: Governance, HR, Finance summary, Compliance, Reports

## Behavior
- When user taps a portal card:
  - Highlight the selected portal card
  - Set selectedPortal = "educare" | "church" | "foundation" | "core"
  - Enable a button: “Continue”

- Continue button:
  - Navigate to: LoginScreen(selectedPortal)
4. Continue button (disabled until a portal is selected)
5. Optional: “Help” link (explains what each portal is)
- Add a small link: “Change selection” (clears selectedPortal)
## Rules
- User cannot access portal pages without login (except public info pages if we add them later).
- Add a “Switch Portal” option only on Logout screen (or profile menu).

## Future Option
We can add “Public / Guest” mode later (news, gallery, contact, donation).
