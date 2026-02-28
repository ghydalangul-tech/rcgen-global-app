import 'package:flutter/material.dart';

/// RCGEN Official Brand Colors
///
/// Palette: White · Gold · Blue
class AppColors {
  AppColors._();

  // ---------------------------------------------------------------------------
  // Primary – Royal Blue
  // ---------------------------------------------------------------------------
  static const Color primaryBlue     = Color(0xFF0B3D91); // Main brand blue
  static const Color primaryBlueDark = Color(0xFF072265); // Darker shade (nav bar, headers)
  static const Color primaryBlueLight= Color(0xFF3A65B5); // Lighter shade (hover / focus)

  // ---------------------------------------------------------------------------
  // Accent – Gold
  // ---------------------------------------------------------------------------
  static const Color gold            = Color(0xFFD4A827); // Main gold
  static const Color goldLight       = Color(0xFFEDD35A); // Button highlights / icons
  static const Color goldDark        = Color(0xFFA07C0A); // Pressed state / borders

  // ---------------------------------------------------------------------------
  // Neutral – White & Surface
  // ---------------------------------------------------------------------------
  static const Color white           = Color(0xFFFFFFFF);
  static const Color surface         = Color(0xFFF4F6FB); // Off-white background
  static const Color divider         = Color(0xFFDDE3F0); // Subtle separator lines

  // ---------------------------------------------------------------------------
  // Text
  // ---------------------------------------------------------------------------
  static const Color textDark        = Color(0xFF072265); // Headings on white
  static const Color textMedium      = Color(0xFF3D5A9C); // Body on white
  static const Color textLight       = Color(0xFFFFFFFF); // Text on blue / gold
  static const Color textMuted       = Color(0xFF8A9CC4); // Placeholder / disabled

  // ---------------------------------------------------------------------------
  // Semantic
  // ---------------------------------------------------------------------------
  static const Color success         = Color(0xFF2E7D32);
  static const Color warning         = Color(0xFFF9A825);
  static const Color error           = Color(0xFFC62828);
  static const Color info            = Color(0xFF1565C0);

  // ---------------------------------------------------------------------------
  // Portal accent tints (used on dashboard cards)
  // ---------------------------------------------------------------------------
  static const Color portalCore       = Color(0xFF0B3D91); // Blue  – Core Governance
  static const Color portalEducare    = Color(0xFF1B6CA8); // Sky blue – Educare
  static const Color portalChurch     = Color(0xFF6A1B9A); // Purple – Church
  static const Color portalFoundation = Color(0xFF1B7A4A); // Green  – Foundation
}
