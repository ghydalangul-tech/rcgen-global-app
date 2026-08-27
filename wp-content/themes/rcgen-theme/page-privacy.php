<?php
/**
 * Template Name: Privacy Policy
 * Slug: privacy-policy  →  rcgen.org.za/privacy-policy/
 *
 * Required for Google Ad Grants compliance.
 * Last Updated: March 2026
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero" style="background:linear-gradient(160deg,var(--color-navy-dark) 0%,var(--color-navy) 100%);">
  <div class="container">
    <span class="section-tag" style="color:var(--color-gold);display:block;margin-bottom:10px;">
      &#x1F4DC; <?php esc_html_e( 'Legal', 'rcgen-theme' ); ?>
    </span>
    <h1><?php esc_html_e( 'Privacy Policy', 'rcgen-theme' ); ?></h1>
    <p style="color:rgba(255,255,255,0.85);font-size:0.9rem;margin-top:8px;">
      <?php esc_html_e( 'Last Updated: March 2026', 'rcgen-theme' ); ?>
    </p>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'Privacy Policy', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<!-- ═══ PRIVACY POLICY CONTENT ════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container" style="max-width:860px;">

    <div class="callout-box fade-in" style="background:#eff6ff;border-left-color:var(--color-navy);margin-bottom:40px;">
      <p><?php esc_html_e( 'RCGEN — Revival Christian Group Children of All Nations — is committed to protecting your privacy. This policy explains how we collect, use, and safeguard your personal information when you visit rcgen.org.za or interact with our organisation.', 'rcgen-theme' ); ?></p>
    </div>

    <!-- 1. Who We Are -->
    <div class="fade-in" style="margin-bottom:48px;">
      <h2 style="font-size:1.4rem;color:var(--color-navy-dark);border-bottom:2px solid #e5e7eb;padding-bottom:10px;margin-bottom:20px;">
        1. <?php esc_html_e( 'Who We Are', 'rcgen-theme' ); ?>
      </h2>
      <p><?php esc_html_e( 'RCGEN (Revival Christian Group Children of All Nations) is an umbrella organisation comprising four registered entities in South Africa:', 'rcgen-theme' ); ?></p>
      <ul style="margin:16px 0 16px 20px;line-height:1.9;">
        <li><strong><?php esc_html_e( 'RCGEN', 'rcgen-theme' ); ?></strong> — <?php esc_html_e( 'Registered Church Organisation', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'RCGEN Educare', 'rcgen-theme' ); ?></strong> — <?php esc_html_e( 'Registered ECD Centre (Dept. of Social Development)', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></strong> — <?php esc_html_e( 'Registered NPO — Feeding Scheme', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></strong> — <?php esc_html_e( 'Registered Community Welfare Organisation', 'rcgen-theme' ); ?></li>
      </ul>
      <p>
        <strong><?php esc_html_e( 'Location:', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'Vrygrond, Cape Town, South Africa', 'rcgen-theme' ); ?><br>
        <strong><?php esc_html_e( 'Website:', 'rcgen-theme' ); ?></strong> <a href="https://rcgen.org.za">rcgen.org.za</a><br>
        <strong><?php esc_html_e( 'Email:', 'rcgen-theme' ); ?></strong> <a href="mailto:info@rcgen.org.za">info@rcgen.org.za</a>
      </p>
    </div>

    <!-- 2. What We Collect -->
    <div class="fade-in" style="margin-bottom:48px;">
      <h2 style="font-size:1.4rem;color:var(--color-navy-dark);border-bottom:2px solid #e5e7eb;padding-bottom:10px;margin-bottom:20px;">
        2. <?php esc_html_e( 'What Information We Collect', 'rcgen-theme' ); ?>
      </h2>
      <p><?php esc_html_e( 'We may collect the following types of information:', 'rcgen-theme' ); ?></p>
      <ul style="margin:16px 0 16px 20px;line-height:1.9;">
        <li><strong><?php esc_html_e( 'Contact Information:', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'Name, email address, and phone number when you submit our contact form or sign up for updates.', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'Donation Information:', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'Name and payment details when you make a donation. Payment processing is handled by secure third-party providers.', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'Usage Data:', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'Pages visited, time spent on site, device type, browser, and geographic region — collected anonymously via Google Analytics 4.', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'Survey Responses:', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'If you complete our community survey, your responses may be collected and stored.', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'Cookies:', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'Small data files stored on your device to improve your browsing experience and support analytics.', 'rcgen-theme' ); ?></li>
      </ul>
    </div>

    <!-- 3. How We Use Your Information -->
    <div class="fade-in" style="margin-bottom:48px;">
      <h2 style="font-size:1.4rem;color:var(--color-navy-dark);border-bottom:2px solid #e5e7eb;padding-bottom:10px;margin-bottom:20px;">
        3. <?php esc_html_e( 'How We Use Your Information', 'rcgen-theme' ); ?>
      </h2>
      <p><?php esc_html_e( 'We use your information to:', 'rcgen-theme' ); ?></p>
      <ul style="margin:16px 0 16px 20px;line-height:1.9;">
        <li><?php esc_html_e( 'Respond to your enquiries and contact form submissions', 'rcgen-theme' ); ?></li>
        <li><?php esc_html_e( 'Process and acknowledge donations', 'rcgen-theme' ); ?></li>
        <li><?php esc_html_e( 'Send organisational updates and newsletters (only if you have opted in)', 'rcgen-theme' ); ?></li>
        <li><?php esc_html_e( 'Improve our website content and user experience using analytics data', 'rcgen-theme' ); ?></li>
        <li><?php esc_html_e( 'Comply with legal and regulatory requirements in South Africa', 'rcgen-theme' ); ?></li>
      </ul>
      <p><?php esc_html_e( 'We do NOT sell, rent, or share your personal information with third parties for marketing purposes.', 'rcgen-theme' ); ?></p>
    </div>

    <!-- 4. Cookies -->
    <div class="fade-in" style="margin-bottom:48px;">
      <h2 style="font-size:1.4rem;color:var(--color-navy-dark);border-bottom:2px solid #e5e7eb;padding-bottom:10px;margin-bottom:20px;">
        4. <?php esc_html_e( 'Cookies', 'rcgen-theme' ); ?>
      </h2>
      <p><?php esc_html_e( 'Our website uses cookies — small text files stored on your device — for the following purposes:', 'rcgen-theme' ); ?></p>
      <ul style="margin:16px 0 16px 20px;line-height:1.9;">
        <li><strong><?php esc_html_e( 'Essential Cookies:', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'Required for the website to function correctly (e.g. WordPress login, contact form security nonces).', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'Analytics Cookies (Google Analytics 4):', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'We use Google Analytics 4 to understand how visitors use our site. This data is anonymous and helps us improve our content. GA4 uses cookies such as _ga and _ga_XXXXXXX.', 'rcgen-theme' ); ?></li>
        <li><strong><?php esc_html_e( 'Chat Widget Cookies (Tidio):', 'rcgen-theme' ); ?></strong> <?php esc_html_e( 'If our live chat widget (Tidio) is active, it may set cookies to support the chat session.', 'rcgen-theme' ); ?></li>
      </ul>
      <p><?php esc_html_e( 'You can control or disable cookies through your browser settings. Disabling cookies may affect some site functionality.', 'rcgen-theme' ); ?></p>
    </div>

    <!-- 5. Third Party Services -->
    <div class="fade-in" style="margin-bottom:48px;">
      <h2 style="font-size:1.4rem;color:var(--color-navy-dark);border-bottom:2px solid #e5e7eb;padding-bottom:10px;margin-bottom:20px;">
        5. <?php esc_html_e( 'Third-Party Services', 'rcgen-theme' ); ?>
      </h2>
      <p><?php esc_html_e( 'Our website integrates with the following third-party services, each with their own privacy policies:', 'rcgen-theme' ); ?></p>
      <ul style="margin:16px 0 16px 20px;line-height:1.9;">
        <li>
          <strong><?php esc_html_e( 'Google Analytics 4', 'rcgen-theme' ); ?></strong> —
          <?php esc_html_e( 'Website traffic and behaviour analytics. Google may store usage data on their servers.', 'rcgen-theme' ); ?>
          <?php esc_html_e( 'Privacy Policy:', 'rcgen-theme' ); ?> <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">policies.google.com/privacy</a>
        </li>
        <li>
          <strong><?php esc_html_e( 'Google Ad Grants', 'rcgen-theme' ); ?></strong> —
          <?php esc_html_e( 'We participate in Google\'s nonprofit advertising programme. Ad interaction data is collected by Google.', 'rcgen-theme' ); ?>
        </li>
        <li>
          <strong><?php esc_html_e( 'Tidio Live Chat', 'rcgen-theme' ); ?></strong> —
          <?php esc_html_e( 'If you use our live chat widget, Tidio may collect your name and chat messages.', 'rcgen-theme' ); ?>
          <?php esc_html_e( 'Privacy Policy:', 'rcgen-theme' ); ?> <a href="https://www.tidio.com/privacy-policy/" target="_blank" rel="noopener">tidio.com/privacy-policy</a>
        </li>
        <li>
          <strong><?php esc_html_e( 'WooCommerce (Donations)', 'rcgen-theme' ); ?></strong> —
          <?php esc_html_e( 'If you make a donation via our website, WooCommerce handles the transaction. Payment details are processed by our payment gateway provider and are not stored on our servers.', 'rcgen-theme' ); ?>
        </li>
      </ul>
    </div>

    <!-- 6. Your Rights -->
    <div class="fade-in" style="margin-bottom:48px;">
      <h2 style="font-size:1.4rem;color:var(--color-navy-dark);border-bottom:2px solid #e5e7eb;padding-bottom:10px;margin-bottom:20px;">
        6. <?php esc_html_e( 'Your Rights (POPIA)', 'rcgen-theme' ); ?>
      </h2>
      <p><?php esc_html_e( 'Under South Africa\'s Protection of Personal Information Act (POPIA), you have the right to:', 'rcgen-theme' ); ?></p>
      <ul style="margin:16px 0 16px 20px;line-height:1.9;">
        <li><?php esc_html_e( 'Access the personal information we hold about you', 'rcgen-theme' ); ?></li>
        <li><?php esc_html_e( 'Request correction of inaccurate personal information', 'rcgen-theme' ); ?></li>
        <li><?php esc_html_e( 'Request deletion of your personal information (where legally permissible)', 'rcgen-theme' ); ?></li>
        <li><?php esc_html_e( 'Withdraw consent for us to process your information', 'rcgen-theme' ); ?></li>
        <li><?php esc_html_e( 'Lodge a complaint with the Information Regulator of South Africa', 'rcgen-theme' ); ?></li>
      </ul>
      <p><?php esc_html_e( 'To exercise any of these rights, contact us at', 'rcgen-theme' ); ?> <a href="mailto:info@rcgen.org.za">info@rcgen.org.za</a>.</p>
    </div>

    <!-- 7. Contact -->
    <div class="fade-in" style="margin-bottom:40px;">
      <h2 style="font-size:1.4rem;color:var(--color-navy-dark);border-bottom:2px solid #e5e7eb;padding-bottom:10px;margin-bottom:20px;">
        7. <?php esc_html_e( 'Contact Us About Privacy', 'rcgen-theme' ); ?>
      </h2>
      <p><?php esc_html_e( 'If you have any questions, concerns, or requests regarding this Privacy Policy or how RCGEN handles your personal information, please contact us:', 'rcgen-theme' ); ?></p>
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-navy);">
        <p>
          <strong><?php esc_html_e( 'RCGEN', 'rcgen-theme' ); ?></strong><br>
          <?php esc_html_e( 'Vrygrond, Cape Town, South Africa', 'rcgen-theme' ); ?><br>
          &#x2709; <a href="mailto:info@rcgen.org.za">info@rcgen.org.za</a><br>
          &#x1F310; <a href="https://rcgen.org.za">rcgen.org.za</a>
        </p>
      </div>
      <p style="margin-top:20px;font-size:0.875rem;color:#6b7280;">
        <?php esc_html_e( 'This policy was last updated in March 2026. We may update this policy from time to time. Any changes will be published on this page with a revised "Last Updated" date.', 'rcgen-theme' ); ?>
      </p>
    </div>

  </div>
</section>

<!-- ═══ CTA ══════════════════════════════════════════════════════════════════ -->
<div class="page-cta-band">
  <div class="container">
    <h2><?php esc_html_e( 'Questions? We\'re Here to Help', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'If you have any questions about our privacy practices or want to exercise your data rights, reach out to us at any time.', 'rcgen-theme' ); ?></p>
    <div class="page-cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">
        &#x2709; <?php esc_html_e( 'Contact Us', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline">
        <?php esc_html_e( 'Back to Home', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
