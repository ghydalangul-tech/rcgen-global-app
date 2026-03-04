</main><!-- #main-content -->

<!-- ═══════════════════════════════ SITE FOOTER ═══════════════════════════════
     NOTE: The old blog sidebar (Archives, Categories, Search, Recent Posts)
     has been intentionally removed. The footer now uses a proper 4-column
     layout as designed.
──────────────────────────────────────────────────────────────────────────── -->
<footer id="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Col 1: About RCGEN -->
      <div class="footer-col">
        <div class="footer-logo">
          <span class="logo-icon" aria-hidden="true">R</span>
          <span class="logo-name">RCGEN</span>
        </div>
        <p><?php esc_html_e( 'Revival Christian Group Children of All Nations — a faith-driven nonprofit serving the Vrygrond community of Cape Town through ministry, welfare, education, and nutrition programs.', 'rcgen-theme' ); ?></p>
        <div class="social-links" aria-label="<?php esc_attr_e( 'Social media links', 'rcgen-theme' ); ?>">
          <a href="https://facebook.com" aria-label="Facebook" rel="noopener noreferrer">&#x1F426;</a>
          <a href="https://instagram.com" aria-label="Instagram" rel="noopener noreferrer">&#x1F4F7;</a>
          <a href="https://youtube.com" aria-label="YouTube" rel="noopener noreferrer">&#x25B6;</a>
          <a href="mailto:<?php echo esc_attr( get_theme_mod( 'contact_email', 'info@rcgen.org.za' ) ); ?>" aria-label="Email">&#x2709;</a>
        </div>
      </div>

      <!-- Col 2: Quick Links -->
      <div class="footer-col">
        <h4><?php esc_html_e( 'Quick Links', 'rcgen-theme' ); ?></h4>
        <nav class="footer-links" aria-label="<?php esc_attr_e( 'Footer navigation', 'rcgen-theme' ); ?>">
          <?php
          if ( has_nav_menu( 'footer' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'footer',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'depth'          => 1,
              'fallback_cb'    => false,
            ) );
          } else {
            $footer_links = array(
              home_url( '/' )              => __( 'Home',              'rcgen-theme' ),
              home_url( '/about' )         => __( 'About Us',          'rcgen-theme' ),
              home_url( '/organisations' ) => __( 'Our Organisations', 'rcgen-theme' ),
              home_url( '/programs' )      => __( 'Programs',          'rcgen-theme' ),
              home_url( '/gallery' )       => __( 'Gallery',           'rcgen-theme' ),
              home_url( '/blog' )          => __( 'Blog &amp; News',   'rcgen-theme' ),
              home_url( '/contact' )       => __( 'Contact Us',        'rcgen-theme' ),
              home_url( '/donate' )        => __( 'Donate',            'rcgen-theme' ),
            );
            foreach ( $footer_links as $url => $label ) {
              echo '<a href="' . esc_url( $url ) . '">' . $label . '</a>';
            }
          }
          ?>
        </nav>
      </div>

      <!-- Col 3: Our Programs -->
      <div class="footer-col">
        <h4><?php esc_html_e( 'Our Programs', 'rcgen-theme' ); ?></h4>
        <nav class="footer-links" aria-label="<?php esc_attr_e( 'Programs navigation', 'rcgen-theme' ); ?>">
          <a href="<?php echo esc_url( home_url( '/organisations/rcgen' ) ); ?>">&#x1F54A; <?php esc_html_e( 'RCGEN', 'rcgen-theme' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/organisations/rcgen-group' ) ); ?>">&#x1F91D; <?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/organisations/rcgen-educare' ) ); ?>">&#x1F393; <?php esc_html_e( 'RCGEN Educare', 'rcgen-theme' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/organisations/rcgen-foundation' ) ); ?>">&#x1F37D; <?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/events' ) ); ?>">&#x1F4C5; <?php esc_html_e( 'Events', 'rcgen-theme' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/volunteer' ) ); ?>">&#x2764; <?php esc_html_e( 'Volunteer', 'rcgen-theme' ); ?></a>
        </nav>
      </div>

      <!-- Col 4: Contact & Social -->
      <div class="footer-col">
        <h4><?php esc_html_e( 'Contact Us', 'rcgen-theme' ); ?></h4>

        <div class="footer-contact-item">
          <span class="icon" aria-hidden="true">&#x1F4CD;</span>
          <span><?php esc_html_e( 'Vrygrond, Cape Town, South Africa', 'rcgen-theme' ); ?></span>
        </div>

        <div class="footer-contact-item">
          <span class="icon" aria-hidden="true">&#x1F310;</span>
          <span><a href="https://rcgen.org.za">rcgen.org.za</a></span>
        </div>

        <?php $email = get_theme_mod( 'contact_email', 'info@rcgen.org.za' ); if ( $email ) : ?>
        <div class="footer-contact-item">
          <span class="icon" aria-hidden="true">&#x2709;</span>
          <span><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></span>
        </div>
        <?php endif; ?>

        <?php $phone = get_theme_mod( 'contact_phone', '' ); if ( $phone ) : ?>
        <div class="footer-contact-item">
          <span class="icon" aria-hidden="true">&#x1F4DE;</span>
          <span><a href="tel:<?php echo esc_attr( preg_replace( '/\s/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a></span>
        </div>
        <?php endif; ?>

        <div style="margin-top:20px;">
          <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-primary" style="font-size:0.85rem; padding:10px 24px;">
            &#x2764; <?php esc_html_e( 'Donate Now', 'rcgen-theme' ); ?>
          </a>
        </div>
      </div>

    </div><!-- .footer-grid -->
  </div><!-- .container -->

  <!-- Footer Bottom Bar -->
  <div class="footer-bottom">
    <p>
      &copy; <?php echo esc_html( date( 'Y' ) ); ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
      <?php esc_html_e( 'All rights reserved.', 'rcgen-theme' ); ?>
      <?php esc_html_e( 'Serving Vrygrond, Cape Town, South Africa.', 'rcgen-theme' ); ?>
    </p>
    <p>
      <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'rcgen-theme' ); ?></a>
      &nbsp;|&nbsp;
      <a href="<?php echo esc_url( home_url( '/terms' ) ); ?>"><?php esc_html_e( 'Terms', 'rcgen-theme' ); ?></a>
      &nbsp;|&nbsp;
      <?php esc_html_e( 'NPO Registration: rcgen.org.za', 'rcgen-theme' ); ?>
    </p>
  </div>

</footer>
<!-- ══════════════════════════ END SITE FOOTER ════════════════════════════════ -->

<?php wp_footer(); ?>
</body>
</html>
