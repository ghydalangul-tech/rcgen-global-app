import 'package:flutter/material.dart';
import 'app_colors.dart';

/// RCGEN app-wide Material theme.
///
/// Usage in main.dart:
/// ```dart
/// MaterialApp(
///   title: 'RCGEN',
///   theme: AppTheme.light,
///   ...
/// )
/// ```
class AppTheme {
  AppTheme._();

  // --------------------------------------------------------------------------
  // Light Theme (primary)
  // --------------------------------------------------------------------------
  static ThemeData get light {
    const ColorScheme scheme = ColorScheme(
      brightness: Brightness.light,

      // Blue family
      primary:          AppColors.primaryBlue,
      onPrimary:        AppColors.white,
      primaryContainer: AppColors.primaryBlueLight,
      onPrimaryContainer: AppColors.white,

      // Gold family
      secondary:          AppColors.gold,
      onSecondary:        AppColors.primaryBlueDark,
      secondaryContainer: AppColors.goldLight,
      onSecondaryContainer: AppColors.primaryBlueDark,

      // Surfaces
      surface:          AppColors.surface,
      onSurface:        AppColors.textDark,
      surfaceContainerHighest: AppColors.divider,

      // Status
      error:            AppColors.error,
      onError:          AppColors.white,
    );

    return ThemeData(
      useMaterial3: true,
      colorScheme: scheme,

      // ---- App bar ----
      appBarTheme: const AppBarTheme(
        backgroundColor: AppColors.primaryBlue,
        foregroundColor: AppColors.white,
        elevation: 0,
        centerTitle: true,
        titleTextStyle: TextStyle(
          color: AppColors.white,
          fontSize: 20,
          fontWeight: FontWeight.w700,
          letterSpacing: 1.2,
        ),
      ),

      // ---- Scaffold ----
      scaffoldBackgroundColor: AppColors.surface,

      // ---- Elevated button (primary action) ----
      elevatedButtonTheme: ElevatedButtonThemeData(
        style: ElevatedButton.styleFrom(
          backgroundColor: AppColors.gold,
          foregroundColor: AppColors.primaryBlueDark,
          padding: const EdgeInsets.symmetric(horizontal: 32, vertical: 14),
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(10),
          ),
          textStyle: const TextStyle(
            fontSize: 16,
            fontWeight: FontWeight.w700,
            letterSpacing: 0.5,
          ),
          elevation: 2,
        ),
      ),

      // ---- Outlined button (secondary action) ----
      outlinedButtonTheme: OutlinedButtonThemeData(
        style: OutlinedButton.styleFrom(
          foregroundColor: AppColors.primaryBlue,
          side: const BorderSide(color: AppColors.primaryBlue, width: 1.5),
          padding: const EdgeInsets.symmetric(horizontal: 28, vertical: 12),
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(10),
          ),
          textStyle: const TextStyle(
            fontSize: 15,
            fontWeight: FontWeight.w600,
          ),
        ),
      ),

      // ---- Text button ----
      textButtonTheme: TextButtonThemeData(
        style: TextButton.styleFrom(
          foregroundColor: AppColors.gold,
          textStyle: const TextStyle(
            fontSize: 14,
            fontWeight: FontWeight.w600,
          ),
        ),
      ),

      // ---- Input fields ----
      inputDecorationTheme: InputDecorationTheme(
        filled: true,
        fillColor: AppColors.white,
        contentPadding: const EdgeInsets.symmetric(horizontal: 16, vertical: 14),
        hintStyle: const TextStyle(color: AppColors.textMuted),
        labelStyle: const TextStyle(color: AppColors.primaryBlue),
        border: OutlineInputBorder(
          borderRadius: BorderRadius.circular(10),
          borderSide: const BorderSide(color: AppColors.divider),
        ),
        enabledBorder: OutlineInputBorder(
          borderRadius: BorderRadius.circular(10),
          borderSide: const BorderSide(color: AppColors.divider),
        ),
        focusedBorder: OutlineInputBorder(
          borderRadius: BorderRadius.circular(10),
          borderSide: const BorderSide(color: AppColors.primaryBlue, width: 2),
        ),
        errorBorder: OutlineInputBorder(
          borderRadius: BorderRadius.circular(10),
          borderSide: const BorderSide(color: AppColors.error),
        ),
      ),

      // ---- Cards ----
      cardTheme: CardThemeData(
        color: AppColors.white,
        elevation: 2,
        shape: RoundedRectangleBorder(
          borderRadius: BorderRadius.circular(12),
        ),
        margin: const EdgeInsets.symmetric(horizontal: 16, vertical: 8),
      ),

      // ---- Bottom navigation ----
      bottomNavigationBarTheme: const BottomNavigationBarThemeData(
        backgroundColor: AppColors.primaryBlueDark,
        selectedItemColor: AppColors.gold,
        unselectedItemColor: AppColors.textMuted,
        type: BottomNavigationBarType.fixed,
        elevation: 8,
      ),

      // ---- Floating action button ----
      floatingActionButtonTheme: const FloatingActionButtonThemeData(
        backgroundColor: AppColors.gold,
        foregroundColor: AppColors.primaryBlueDark,
        elevation: 4,
      ),

      // ---- Divider ----
      dividerTheme: const DividerThemeData(
        color: AppColors.divider,
        thickness: 1,
        space: 1,
      ),

      // ---- Text ----
      textTheme: const TextTheme(
        displayLarge:   TextStyle(color: AppColors.textDark,   fontWeight: FontWeight.w800),
        displayMedium:  TextStyle(color: AppColors.textDark,   fontWeight: FontWeight.w700),
        displaySmall:   TextStyle(color: AppColors.textDark,   fontWeight: FontWeight.w700),
        headlineLarge:  TextStyle(color: AppColors.textDark,   fontWeight: FontWeight.w700),
        headlineMedium: TextStyle(color: AppColors.textDark,   fontWeight: FontWeight.w600),
        headlineSmall:  TextStyle(color: AppColors.textDark,   fontWeight: FontWeight.w600),
        titleLarge:     TextStyle(color: AppColors.textDark,   fontWeight: FontWeight.w600),
        titleMedium:    TextStyle(color: AppColors.textMedium, fontWeight: FontWeight.w500),
        titleSmall:     TextStyle(color: AppColors.textMedium, fontWeight: FontWeight.w500),
        bodyLarge:      TextStyle(color: AppColors.textMedium),
        bodyMedium:     TextStyle(color: AppColors.textMedium),
        bodySmall:      TextStyle(color: AppColors.textMuted),
        labelLarge:     TextStyle(color: AppColors.textDark,   fontWeight: FontWeight.w600),
        labelMedium:    TextStyle(color: AppColors.textMedium, fontWeight: FontWeight.w500),
        labelSmall:     TextStyle(color: AppColors.textMuted),
      ),

      // ---- Progress indicator ----
      progressIndicatorTheme: const ProgressIndicatorThemeData(
        color: AppColors.gold,
        linearTrackColor: AppColors.divider,
      ),

      // ---- Chip ----
      chipTheme: ChipThemeData(
        backgroundColor: AppColors.surface,
        labelStyle: const TextStyle(color: AppColors.textDark),
        selectedColor: AppColors.primaryBlue,
        secondaryLabelStyle: const TextStyle(color: AppColors.white),
        shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(8)),
      ),
    );
  }

  // --------------------------------------------------------------------------
  // Dark Theme (optional — future phase)
  // --------------------------------------------------------------------------
  static ThemeData get dark {
    return light.copyWith(
      brightness: Brightness.dark,
      scaffoldBackgroundColor: AppColors.primaryBlueDark,
      colorScheme: const ColorScheme(
        brightness: Brightness.dark,
        primary:          AppColors.gold,
        onPrimary:        AppColors.primaryBlueDark,
        primaryContainer: AppColors.primaryBlue,
        onPrimaryContainer: AppColors.white,
        secondary:        AppColors.goldLight,
        onSecondary:      AppColors.primaryBlueDark,
        secondaryContainer: AppColors.goldDark,
        onSecondaryContainer: AppColors.white,
        surface:          AppColors.primaryBlueDark,
        onSurface:        AppColors.white,
        surfaceContainerHighest: AppColors.primaryBlue,
        error:            AppColors.error,
        onError:          AppColors.white,
      ),
    );
  }
}
