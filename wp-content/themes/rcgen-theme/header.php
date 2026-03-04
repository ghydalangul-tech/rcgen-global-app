<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#1a2744">
<meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ?: 'RCGEN — Revival Christian Group Children of All Nations. Serving the Vrygrond community through faith, education, and care.' ); ?>">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="sr-only" href="#main-content"><?php esc_html_e( 'Skip to content', 'rcgen-theme' ); ?></a>

<!-- ═══════════════════════════════ SITE HEADER ═══════════════════════════════ -->
<header id="site-header" role="banner">
  <div class="nav-wrapper">

    <!-- Logo -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?> — <?php esc_html_e( 'Home', 'rcgen-theme' ); ?>">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <span class="logo-icon" aria-hidden="true">R</span>
        <span class="logo-text">
          <span class="logo-name">RCGEN</span>
          <span class="logo-tagline"><?php esc_html_e( 'Children of All Nations', 'rcgen-theme' ); ?></span>
        </span>
      <?php endif; ?>
    </a>

    <!-- Primary Navigation -->
    <nav class="primary-nav" id="primary-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'rcgen-theme' ); ?>">
      <?php
      if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'items_wrap'     => '%3$s',
          'walker'         => new RCGEN_Nav_Walker(),
          'fallback_cb'    => 'rcgen_fallback_nav',
        ) );
      } else {
        rcgen_fallback_nav();
      }
      ?>
    </nav>

    <!-- Mobile Toggle -->
    <button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="primary-nav" aria-label="<?php esc_attr_e( 'Toggle menu', 'rcgen-theme' ); ?>">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>
</header>
<!-- ══════════════════════════ END SITE HEADER ════════════════════════════════ -->

<main id="main-content" role="main">
