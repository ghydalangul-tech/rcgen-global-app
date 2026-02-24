# RCGEN Global App – Firestore Database Structure (Draft)

## Collections (Top Level)
- users
- portals
- educare_children
- educare_classes
- educare_attendance
- educare_fees
- church_members
- church_visitors
- church_giving
- church_events
- foundation_beneficiaries
- foundation_donations
- foundation_volunteers
- core_documents
- core_risk
- core_hr
- core_finance_summary

## Key Rule
Every record must include:
- portalId: educare | church | foundation | core
- orgId: (RCGEN entity identifier)
- createdAt
- createdBy
