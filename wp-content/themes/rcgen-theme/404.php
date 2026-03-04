<?php
/**
 * 404 Not Found template.
 *
 * @package rcgen-theme
 */

get_header();
?>

<section style="min-height:70vh; display:flex; align-items:center; padding-top:90px;">
  <div class="container" style="text-align:center; padding:60px 20px;">
    <div style="font-size:6rem; line-height:1; margin-bottom:24px; opacity:0.15; font-family:var(--font-heading); font-weight:700; color:var(--color-navy);">404</div>
    <h1 style="font-size:2rem; margin-bottom:16px;"><?php esc_html_e( 'Page Not Found', 'rcgen-theme' ); ?></h1>
    <p style="color:var(--color-gray); max-width:480px; margin:0 auto 32px;">
      <?php esc_html_e( 'The page you are looking for does not exist or has been moved. Let\'s get you back on track.', 'rcgen-theme' ); ?>
    </p>
    <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap;">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
        &#x1F3E0; <?php esc_html_e( 'Back to Home', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-navy">
        <?php esc_html_e( 'Contact Us', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
