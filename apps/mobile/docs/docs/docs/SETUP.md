# RCGEN Global App – Setup Guide

This guide explains how to set up and run the RCGEN Global App project.

## 1. Requirements
- Git installed
- Flutter SDK (latest stable)
- Android Studio (for Android emulator) OR a real Android phone
- VS Code (recommended)

## 2. Clone the Repository
1. Open a terminal / command prompt
2. Run:

git clone https://github.com/ghydalangul-tech/rcgen-global-app.git

3. Open the folder in VS Code

## 3. Mobile App (Flutter)
Project folder:
apps/mobile/

### 3.1 Create Flutter app (first time only)
If the Flutter app is not created yet, you will create it later using:

flutter create .

(inside apps/mobile/)

### 3.2 Install dependencies
flutter pub get

### 3.3 Run the app
flutter run

## 4. Recommended Folder Rules
- Put all app screenshots in docs/screenshots/
- Put all design and feature notes in docs/
- Keep secrets out of GitHub (API keys must be in local config files)

## 5. Environment Variables (Future)
We will later add:
- Firebase configuration
- Google Maps API key
- Payment configuration

## 6. Support / Contact
RCGEN:
- Website: rcgen.org.za
- Email: info@rcgen.org.za
