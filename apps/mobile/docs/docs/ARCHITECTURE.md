# RCGEN Global App – Architecture

## 1. Overview
RCGEN Global App is a multi-platform system (Mobile + Web + Admin) that connects children registration, donations, volunteers, and communications.

## 2. Core Components

### 2.1 Mobile App (Flutter)
Location: apps/mobile/
Responsibilities:
- User onboarding
- Child registration forms
- Donation flow (PayPal / SnapScan / Bank)
- Volunteer sign-up
- News & gallery viewing
- Contact RCGEN form (send to info@rcgen.org.za)

### 2.2 Backend Services (API / Firebase)
Location: services/api/
Responsibilities:
- Store and manage data (children, donations, volunteers, content)
- Authentication & role management (admin vs public)
- Validation and security rules
- Send email notifications (contact forms → info@rcgen.org.za)

### 2.3 Admin Dashboard (Future)
Location: apps/admin/ (future)
Responsibilities:
- Approve / manage child registrations
- Track donation history and receipts
- Manage volunteer applications
- Publish news and gallery items

## 3. Data Model (High-Level)

### Children
- childId
- name, surname
- dateOfBirth
- classGroup (0–18m, 18–36m, 3–4, 4–5, Grade R)
- parent/guardian details
- documents (uploads)

### Donations
- donationId
- donor name/email (optional)
- amount, currency
- method (PayPal / SnapScan / Bank)
- date
- reference

### Volunteers
- volunteerId
- name, contact
- skills
- availability
- status (pending/approved)

### Content
- news posts
- gallery items

## 4. Security Principles
- No child sensitive data exposed publicly
- Admin-only actions protected by roles
- Audit logs for changes
- Minimal permissions

## 5. Integrations
- Email notifications: info@rcgen.org.za
- Payments: PayPal, SnapScan, Bank transfer (recording + reconciliation)
- Maps (future): Google Maps API key for location and directions
- AI (future): Azure OpenAI (RCGEN Agents)

## 6. Environments
- DEV: testing
- PROD: live production

## 7. Roadmap (Technical)
Phase 1: Flutter mobile UI + Firebase basic database  
Phase 2: Donations tracking + Volunteer registration  
Phase 3: Admin dashboard + content publishing  
Phase 4: AI assistant + advanced automation
