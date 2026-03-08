<?php
/**
 * Template Name: Contact Page
 * Slug: contact  →  rcgen.org.za/contact/
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero" style="background:linear-gradient(160deg,var(--color-navy-dark) 0%,var(--color-navy) 100%);">
  <div class="container">
    <span class="section-tag" style="color:var(--color-gold);display:block;margin-bottom:10px;">
      &#x2709; <?php esc_html_e( 'Get In Touch', 'rcgen-theme' ); ?>
    </span>
    <h1><?php esc_html_e( 'Contact RCGEN', 'rcgen-theme' ); ?></h1>
    <p style="color:rgba(255,255,255,0.85);font-size:1rem;margin-top:8px;">
      <?php esc_html_e( 'We would love to hear from you. Reach out any time.', 'rcgen-theme' ); ?>
    </p>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'Contact', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<!-- ═══ CONTACT INFO + FORM ══════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="contact-grid">

      <!-- Contact Information -->
      <div class="contact-info fade-in">
        <h3><?php esc_html_e( 'Find Us in Vrygrond', 'rcgen-theme' ); ?></h3>
        <p><?php esc_html_e( 'RCGEN is based in the heart of Vrygrond, Cape Town. We welcome visitors, volunteers, donors, and anyone who wants to know more about our work.', 'rcgen-theme' ); ?></p>

        <div class="contact-details">

          <div class="contact-item">
            <div class="contact-item-icon" aria-hidden="true">&#x1F4CD;</div>
            <div class="contact-item-text">
              <div class="label"><?php esc_html_e( 'Location', 'rcgen-theme' ); ?></div>
              <div class="value"><?php esc_html_e( 'Vrygrond, Cape Town, South Africa', 'rcgen-theme' ); ?></div>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon" aria-hidden="true">&#x2709;</div>
            <div class="contact-item-text">
              <div class="label"><?php esc_html_e( 'Email', 'rcgen-theme' ); ?></div>
              <div class="value"><a href="mailto:info@rcgen.org.za">info@rcgen.org.za</a></div>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon" aria-hidden="true">&#x1F310;</div>
            <div class="contact-item-text">
              <div class="label"><?php esc_html_e( 'Website', 'rcgen-theme' ); ?></div>
              <div class="value"><a href="https://rcgen.org.za">rcgen.org.za</a></div>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon" aria-hidden="true">&#x1F4AC;</div>
            <div class="contact-item-text">
              <div class="label"><?php esc_html_e( 'WhatsApp', 'rcgen-theme' ); ?></div>
              <div class="value"><?php esc_html_e( 'For urgent enquiries, WhatsApp us at info@rcgen.org.za', 'rcgen-theme' ); ?></div>
            </div>
          </div>

        </div><!-- .contact-details -->

        <div class="callout-box" style="margin-top:32px;background:#eff6ff;border-left-color:var(--color-navy);">
          <p>&#x23F0; <strong><?php esc_html_e( 'Response Time:', 'rcgen-theme' ); ?></strong>
          <?php esc_html_e( ' We aim to respond to all messages within 24–48 hours on weekdays.', 'rcgen-theme' ); ?></p>
        </div>

        <div class="callout-box" style="margin-top:16px;background:#f0fdf4;border-left-color:#16a34a;">
          <h4 style="color:#16a34a;font-size:0.95rem;margin-bottom:8px;"><?php esc_html_e( 'Service Times', 'rcgen-theme' ); ?></h4>
          <p style="font-size:0.9rem;margin:0;">
            &#x26EA; <?php esc_html_e( 'Sunday Worship — 09:00', 'rcgen-theme' ); ?><br>
            &#x1F64F; <?php esc_html_e( 'Wednesday Prayer — 18:00', 'rcgen-theme' ); ?><br>
            &#x1F31F; <?php esc_html_e( 'Friday Youth — 17:00', 'rcgen-theme' ); ?>
          </p>
        </div>

      </div><!-- .contact-info -->

      <!-- Contact Form -->
      <div class="contact-form fade-in fade-in-delay-1">
        <h3><?php esc_html_e( 'Send Us a Message', 'rcgen-theme' ); ?></h3>
        <form id="rcgen-contact-form" novalidate aria-label="<?php esc_attr_e( 'Contact form', 'rcgen-theme' ); ?>">
          <?php wp_nonce_field( 'rcgen-nonce', 'nonce' ); ?>

          <div class="form-row">
            <div class="form-group">
              <label for="cf-name"><?php esc_html_e( 'Full Name', 'rcgen-theme' ); ?> *</label>
              <input type="text" id="cf-name" name="name" required autocomplete="name"
                placeholder="<?php esc_attr_e( 'e.g. Jane Smith', 'rcgen-theme' ); ?>">
            </div>
            <div class="form-group">
              <label for="cf-email"><?php esc_html_e( 'Email Address', 'rcgen-theme' ); ?> *</label>
              <input type="email" id="cf-email" name="email" required autocomplete="email"
                placeholder="<?php esc_attr_e( 'you@example.com', 'rcgen-theme' ); ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="cf-phone"><?php esc_html_e( 'Phone Number', 'rcgen-theme' ); ?> <span style="font-weight:400;color:#6b7280;">(<?php esc_html_e( 'optional', 'rcgen-theme' ); ?>)</span></label>
            <input type="tel" id="cf-phone" name="phone" autocomplete="tel"
              placeholder="<?php esc_attr_e( 'e.g. 021 000 0000', 'rcgen-theme' ); ?>">
          </div>

          <div class="form-group">
            <label for="cf-subject"><?php esc_html_e( 'Subject', 'rcgen-theme' ); ?> *</label>
            <select id="cf-subject" name="subject" required>
              <option value=""><?php esc_html_e( 'Select a subject…', 'rcgen-theme' ); ?></option>
              <option value="General Enquiry"><?php esc_html_e( 'General Enquiry', 'rcgen-theme' ); ?></option>
              <option value="Donations"><?php esc_html_e( 'Donations &amp; Giving', 'rcgen-theme' ); ?></option>
              <option value="Volunteering"><?php esc_html_e( 'Volunteering', 'rcgen-theme' ); ?></option>
              <option value="Educare Enrolment"><?php esc_html_e( 'Educare Enrolment', 'rcgen-theme' ); ?></option>
              <option value="Media &amp; Press"><?php esc_html_e( 'Media &amp; Press', 'rcgen-theme' ); ?></option>
            </select>
          </div>

          <div class="form-group">
            <label for="cf-message"><?php esc_html_e( 'Message', 'rcgen-theme' ); ?> *</label>
            <textarea id="cf-message" name="message" required rows="6"
              placeholder="<?php esc_attr_e( 'How can we help you?', 'rcgen-theme' ); ?>"></textarea>
          </div>

          <div id="cf-status" role="alert" aria-live="polite" style="margin-bottom:12px;display:none;"></div>

          <button type="submit" class="btn btn-primary" id="cf-submit" style="width:100%;justify-content:center;">
            &#x2709; <?php esc_html_e( 'Send Message', 'rcgen-theme' ); ?>
          </button>

        </form>
      </div><!-- .contact-form -->

    </div><!-- .contact-grid -->
  </div>
</section>

<!-- ═══ 4 ORG QUICK LINKS ════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Organisations', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Contact the Right Team', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'Not sure who to contact? Here is a quick guide to each of our four organisations.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="services-grid">
      <div class="service-card service-card--church fade-in">
        <span class="service-icon">&#x26EA;</span>
        <h4><?php esc_html_e( 'RCGEN Church', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'For pastoral matters, Sunday services, youth ministry, or spiritual support.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/rcgen' ) ); ?>" class="read-more" style="color:var(--color-church);"><?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?></a>
      </div>
      <div class="service-card service-card--foundation fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F35E;</span>
        <h4><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'For the feeding scheme, food donations, or volunteering on distribution days.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/rcgen-foundation' ) ); ?>" class="read-more" style="color:var(--color-foundation);"><?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?></a>
      </div>
      <div class="service-card service-card--educare fade-in fade-in-delay-2">
        <span class="service-icon">&#x1F4DA;</span>
        <h4><?php esc_html_e( 'RCGEN Educare', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'For crèche enrolment enquiries, early childhood education, and parent support.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/rcgen-educare' ) ); ?>" class="read-more" style="color:var(--color-educare);"><?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?></a>
      </div>
      <div class="service-card service-card--group fade-in fade-in-delay-3">
        <span class="service-icon">&#x1F91D;</span>
        <h4><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'For community welfare, humanitarian aid, elderly care, or crisis intervention.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/rcgen-group' ) ); ?>" class="read-more" style="color:var(--color-group);"><?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?></a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA ══════════════════════════════════════════════════════════════════ -->
<div class="page-cta-band">
  <div class="container">
    <h2><?php esc_html_e( 'Ready to Make a Difference?', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'Donate, volunteer, or partner with RCGEN. Every contribution — big or small — changes lives in Vrygrond.', 'rcgen-theme' ); ?></p>
    <div class="page-cta-actions">
      <a href="<?php echo esc_url( home_url( '/donations' ) ); ?>" class="btn btn-primary">
        &#x2764; <?php esc_html_e( 'Donate Now', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-outline">
        <?php esc_html_e( 'Learn About Us', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
