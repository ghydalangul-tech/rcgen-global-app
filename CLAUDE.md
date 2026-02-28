# CLAUDE.md – RCGEN Global App

This file provides context, conventions, and guidance for AI assistants (Claude and others) working in this repository.

---

## Project Overview

**RCGEN** (display name) is the official app name used throughout the UI. The full legal name is Revival Christian Group Children of All Nations. It is a unified multi-portal application that manages children, donations, volunteers, and communications across four distinct operational areas.

> **Branding rule:** The app must always display as **"RCGEN"** — not "RCGEN Global App" — in all screens, titles, splash screens, app store listings, and marketing material.

- **Contact:** info@rcgen.org.za
- **Website:** rcgen.org.za
- **Status:** Early-stage — currently in specification and planning phase. No production source code exists yet.

---

## Repository Structure

```
rcgen-global-app/
├── CLAUDE.md                          # This file
├── README.md                          # Project summary
├── firestore.rules                    # Firebase Firestore security rules (deployed)
├── apps/
│   └── mobile/                        # Flutter mobile application (planned)
│       ├── README.md
│       ├── docs/
│       │   ├── PDR.md                 # Product Requirements Document
│       │   └── docs/
│       │       ├── ARCHITECTURE.md    # System architecture
│       │       └── docs/
│       │           └── SETUP.md       # Developer setup guide
│       └── services/
│           └── api/                   # Backend API layer (planned)
│               ├── README.md
│               └── docs/
│                   ├── README.md
│                   └── github/
│                       └── README.md
└── docs/                              # Feature and screen specifications
    ├── DATABASE_STRUCTURE.md          # Firestore schema (authoritative)
    ├── LOGIN_SCREEN_SPEC.md           # Login UI/UX specification
    ├── FIREBASE_SECURITY_RULES.md     # Security architecture docs
    ├── CORE_DASHBOARD_SPEC.md         # Core portal dashboard spec
    ├── PORTALS.md                     # 4-in-1 portal system overview
    └── docs/
        ├── PORTAL_FLOW.md             # User flow across portals
        └── docs/
            ├── DATABASE_STRUCTURE.md  # Draft database structure
            └── docs/
                └── PORTAL_SELECTOR_SCREEN.md  # Portal selection UI spec
```

> **Note on nested docs:** Several `docs/docs/docs/` nesting levels exist due to iterative authoring. The top-level `docs/` files are generally the most authoritative.

---

## Technology Stack

| Layer | Technology | Status |
|---|---|---|
| Mobile Frontend | Flutter (Dart) | Planned — Phase 1 |
| Backend / Database | Firebase (Firestore, Auth, Storage) | Rules defined; app not yet built |
| Security Rules | Firestore Rules v2 | Implemented (`firestore.rules`) |
| Payments | PayPal, SnapScan, Bank Transfer | Planned — Phase 2 |
| AI Assistant | Azure OpenAI (RCGEN Core Agent) | Planned — Phase 4 |
| Maps | Google Maps API | Planned — Future |
| Admin Dashboard | Flutter Web (apps/admin/) | Planned — Phase 3 |

---

## Portal System

The platform is a **4-in-1 system**. A single app presents four separate portals, each with distinct roles, modules, and data isolation.

### Portal 1 — Core Governance (`core`)
- **Users:** Directors, CEO, Board Members, Governance/Finance Officers
- **Modules:** Governance Documents, Risk Management, HR, Financial Overview (all portals), Compliance, Strategic Dashboard
- **Access:** Full read across all portals; restricted to leadership only
- **Registration:** Invite-only (admin creates accounts)

### Portal 2 — Educare (`educare`)
- **Users:** Principal, Teachers, Administrators, Parents
- **Modules:** Child Registration, Attendance, Class Management, Fees & Invoices, Parent Communication, Reports
- **Access:** Parents see only their own child; teachers see assigned classes; principal has full Educare access
- **Registration:** Child/parent or staff registration options

### Portal 3 — Church (`church`)
- **Users:** Apostle/Pastor, Church Admin, Ministry Leaders, Members
- **Modules:** Member Database, Visitor & Follow-Up, Prayer & Counseling, Ministries, Tithes & Giving, Events, Sermons & Media
- **Access:** Members see own giving/profile; ministry leaders see own department; Apostle sees everything
- **Registration:** Member or leader registration (leader requires approval)

### Portal 4 — Foundation (`foundation`)
- **Users:** Foundation Admin, Volunteer Coordinators, Volunteers
- **Modules:** Beneficiary Registration, Feeding Scheme, Donation Records, Volunteer Scheduling, Impact Reports
- **Access:** Volunteers see assigned tasks only; admin has full Foundation access
- **Registration:** Volunteer or donor profile options

### Portal Selection Flow

```
App Start
  └─► Portal Selector Screen
        └─► LoginScreen(selectedPortal)
              └─► Firebase Auth (email/phone + password)
                    └─► Role permission check
                          ├─► Success → PortalDashboard(selectedPortal, userRole)
                          └─► No permission → "Access denied" + "Switch Portal" button
```

---

## Firebase Database Schema

Firestore uses a **flat-root collection** model with portal-based data isolation.

### Root Collections

| Collection | Description |
|---|---|
| `/users/{userId}` | All user accounts |
| `/portals/{portalId}` | Portal definitions (`core`, `educare`, `church`, `foundation`) |
| `/roles/{roleId}` | Role definitions with permission arrays |
| `/activities/{activityId}` | Audit log of user actions |
| `/notifications` | User notifications |

### User Document Fields
```
fullName, email, phone, role, assignedPortal, isActive, createdAt
```

### Portal-Specific Collections

**Educare:**
- `/children/{doc}` — Student records
- `/classes/{doc}` — Class definitions
- `/attendance/{doc}` — Attendance records
- `/fees/{doc}` — Fee and invoice records

**Church:**
- `/members/{doc}` — Member profiles
- `/events/{doc}` — Events and calendar
- `/offerings/{doc}` — Tithes and giving records
- `/prayer_requests/{doc}`

**Foundation:**
- `/beneficiaries/{doc}`
- `/donations/{doc}`
- `/volunteers/{doc}`
- `/projects/{doc}`

**Core:**
- `/reports/{doc}`, `/compliance/{doc}`, `/finance_summary/{doc}`, `/risk_alerts/{doc}`

### All Documents Should Include
```
portalId    — Portal identifier string
orgId       — RCGEN entity identifier
createdAt   — Timestamp
createdBy   — User UID
```

---

## Firestore Security Rules

The `firestore.rules` file is the **only currently deployed artifact** in this repo. Key conventions:

- `isAuthenticated()` — checks `request.auth != null`
- `getUserData()` — fetches `/users/{uid}` document
- `userPortal()` — returns `getUserData().portal`
- `isCore()` / `isEducare()` / `isChurch()` / `isFoundation()` — portal membership checks

**Access model:**
- Core users get wildcard read/write across all collections
- Each portal's users can only read/write their own portal's collections
- Security principle: `user.assignedPortal == collection.portal`

When modifying `firestore.rules`:
- Keep helper functions (`isAuthenticated`, `getUserData`, etc.) at the top
- Always test rules with the Firebase Emulator before deploying
- Never expose child data or sensitive personal info to unauthenticated users

---

## Development Workflow

### Branch Strategy
- `master` — Main/production branch
- `claude/*` — Claude AI assistant working branches (current pattern)
- Feature branches should follow descriptive naming: `feature/portal-selector`, `fix/auth-login`

### Setting Up for Development

```bash
# 1. Clone the repo
git clone https://github.com/ghydalangul-tech/rcgen-global-app.git
cd rcgen-global-app

# 2. For the Flutter mobile app (once source code exists)
cd apps/mobile
flutter pub get
flutter run

# 3. For Firebase (once configured)
firebase login
firebase use <project-id>
firebase deploy --only firestore:rules
```

### Required Tools
- Git
- Flutter SDK (latest stable)
- Android Studio or a physical Android/iOS device
- VS Code (recommended editor)
- Firebase CLI (`npm install -g firebase-tools`)

### Environment Variables (Not yet configured — future setup)
```
FIREBASE_PROJECT_ID
FIREBASE_API_KEY
FIREBASE_APP_ID
FIREBASE_AUTH_DOMAIN
FIREBASE_STORAGE_BUCKET
PAYPAL_CLIENT_ID
SNAPCAN_API_KEY
GOOGLE_MAPS_API_KEY
AZURE_OPENAI_API_KEY
AZURE_OPENAI_ENDPOINT
```

**Never commit secrets or API keys to the repository.**

---

## Coding Conventions

### Dart / Flutter
- Follow official Dart style guide and use `dart format`
- Use `flutter analyze` before committing
- Organise Flutter source inside `apps/mobile/lib/`:
  - `lib/theme/` — Brand colors and Material theme (`app_colors.dart`, `app_theme.dart`)
  - `lib/screens/` — UI screens
  - `lib/widgets/` — Reusable components
  - `lib/services/` — Business logic, API calls
  - `lib/models/` — Data models
  - `lib/main.dart` — Entry point
- Screen routing should pass `selectedPortal` as a parameter, not as a global

### Brand Colors
RCGEN uses a **White · Gold · Blue** palette. Always source colors from `app_colors.dart` — never use raw hex values in widgets.

| Token | Hex | Usage |
|---|---|---|
| `AppColors.primaryBlue` | `#0B3D91` | App bar, primary buttons background, headers |
| `AppColors.primaryBlueDark` | `#072265` | Navigation bar background, deep accents |
| `AppColors.primaryBlueLight` | `#3A65B5` | Hover / focus states |
| `AppColors.gold` | `#D4A827` | CTA buttons, icons, highlights |
| `AppColors.goldLight` | `#EDD35A` | Button hover, badge backgrounds |
| `AppColors.white` | `#FFFFFF` | Card backgrounds, text on blue/gold |
| `AppColors.surface` | `#F4F6FB` | Scaffold / page background |

**Portal accent colors** (dashboard cards):

| Portal | Token | Hex |
|---|---|---|
| Core Governance | `AppColors.portalCore` | `#0B3D91` |
| Educare | `AppColors.portalEducare` | `#1B6CA8` |
| Church | `AppColors.portalChurch` | `#6A1B9A` |
| Foundation | `AppColors.portalFoundation` | `#1B7A4A` |

Apply the theme in `main.dart`:
```dart
MaterialApp(
  title: 'RCGEN',
  theme: AppTheme.light,
  darkTheme: AppTheme.dark,
  ...
)
```

### Firebase / Firestore
- Portal isolation is mandatory — never write data to a collection outside the user's assigned portal
- Use server-side timestamps (`FieldValue.serverTimestamp()`) for `createdAt`
- All reads should be paginated for large collections

### Security
- Minimum password: 8 characters
- Lock accounts after 8 failed login attempts
- Log all sign-in events (portal, timestamp, device)
- Admin-only operations must be protected by both Firestore rules and application-level role checks
- Child records must never be exposed publicly

### Commit Messages
Follow the repository's established pattern (imperative, descriptive):
```
Add <feature>
Fix <issue>
Update <file or module>
Rename <old> to <new>
Delete <file>
```

---

## Development Phases

| Phase | Focus | Key Deliverables |
|---|---|---|
| 1 | Foundation | Flutter mobile UI, Firebase auth, basic Firestore database |
| 2 | Core Features | Donations tracking, volunteer registration, payment integration |
| 3 | Administration | Admin dashboard, content publishing, news & gallery |
| 4 | Intelligence | AI assistant (RCGEN Core Agent via Azure OpenAI), advanced automation |

---

## Key Specifications (Reference Docs)

| Document | Location | Purpose |
|---|---|---|
| Product Requirements | `apps/mobile/docs/PDR.md` | Feature scope |
| Architecture | `apps/mobile/docs/docs/ARCHITECTURE.md` | System design |
| Setup Guide | `apps/mobile/docs/docs/docs/SETUP.md` | Developer onboarding |
| Database Schema | `docs/DATABASE_STRUCTURE.md` | Firestore structure |
| Portal System | `docs/PORTALS.md` | 4-portal overview |
| Login Screen | `docs/LOGIN_SCREEN_SPEC.md` | Auth UI/UX spec |
| Security Rules Docs | `docs/FIREBASE_SECURITY_RULES.md` | Rule architecture |
| Portal Selector UI | `docs/docs/docs/docs/PORTAL_SELECTOR_SCREEN.md` | Entry screen spec |
| Portal User Flow | `docs/docs/PORTAL_FLOW.md` | Navigation flows |

---

## What AI Assistants Should Know

1. **This repo is spec-first.** Most files are planning documents. When implementing, always cross-reference the relevant spec file before writing code.

2. **The 4-portal architecture is central.** Every screen, data model, and security rule must be portal-aware. Always ask: which portal does this belong to?

3. **Data isolation is non-negotiable.** Portal data must never leak across portal boundaries. Core Governance is the only role with cross-portal access.

4. **Children's data is sensitive.** Any feature touching child records must enforce strict access controls. Never expose this data publicly.

5. **Firebase is the primary backend.** Prefer Firestore for data storage, Firebase Auth for identity, and Firebase Storage for files. The Firestore rules in `firestore.rules` are the ground truth for data access.

6. **No build scripts exist yet.** The project has no Makefile, CI/CD, or test infrastructure. When adding these, document them here.

7. **Contact for RCGEN-specific queries:** info@rcgen.org.za

8. **App display name is "RCGEN".** All UI text, screen titles, app name fields (Android `app_name`, iOS `CFBundleDisplayName`, Flutter `name` in `pubspec.yaml`) must read `RCGEN`, not "RCGEN Global App".
