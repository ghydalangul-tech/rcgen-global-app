<?php
/**
 * Template Name: About Us Page
 * Slug: about  →  rcgen.org.za/about/
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero">
  <div class="container">
    <span class="section-tag" style="color:var(--color-gold);display:block;margin-bottom:10px;">
      <?php esc_html_e( 'Our Story', 'rcgen-theme' ); ?>
    </span>
    <h1><?php esc_html_e( 'About RCGEN', 'rcgen-theme' ); ?></h1>
    <p style="color:rgba(255,255,255,0.85);font-size:1rem;margin-top:8px;font-style:italic;">
      <?php esc_html_e( 'One Vision. Four Organisations. One Community.', 'rcgen-theme' ); ?>
    </p>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'About Us', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<!-- ═══ STORY ════════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="page-split">
      <div>
        <span class="section-tag"><?php esc_html_e( 'Founded in Vrygrond', 'rcgen-theme' ); ?></span>
        <h2><?php esc_html_e( 'Revival Christian Group Children of All Nations', 'rcgen-theme' ); ?></h2>
        <p><?php esc_html_e( 'RCGEN — Revival Christian Group Children of All Nations — was founded in Vrygrond, Cape Town, as a faith-driven response to the profound social and spiritual needs of one of the Western Cape\'s most underserved communities.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'What began as a small church gathering has grown over more than a decade into a family of four registered organisations — each serving a distinct need, all united by the same Christian calling: to love God and love our neighbours.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'Today, RCGEN touches hundreds of lives every week through worship, education, feeding, and community welfare. We are not a government agency or a large NGO — we are a community caring for its own, sustained by faith, volunteerism, and the generosity of supporters who believe in the dignity of every person.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="page-split-img" aria-hidden="true">&#x1F1FF;&#x1F1E6;</div>
    </div>
  </div>
</section>

<!-- ═══ MISSION / VISION / VALUES ════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Foundation', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Mission, Vision &amp; Values', 'rcgen-theme' ); ?></h2>
    </div>

    <div class="grid-2 fade-in" style="gap:32px;margin-top:40px;">
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-navy);">
        <h4 style="color:var(--color-navy);margin-bottom:10px;font-family:var(--font-heading);">
          &#x1F3AF; <?php esc_html_e( 'Our Mission', 'rcgen-theme' ); ?>
        </h4>
        <p><?php esc_html_e( 'To serve the Vrygrond community through faith-driven worship, quality early childhood education, weekly feeding programmes, and holistic community welfare — transforming lives in the name of Jesus Christ.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-gold);">
        <h4 style="color:var(--color-gold-dark);margin-bottom:10px;font-family:var(--font-heading);">
          &#x1F441; <?php esc_html_e( 'Our Vision', 'rcgen-theme' ); ?>
        </h4>
        <p><?php esc_html_e( 'A Vrygrond where every child is educated, every family is fed, and every person lives with dignity and hope — a community transformed by the love of God and the service of His people.', 'rcgen-theme' ); ?></p>
      </div>
    </div>

    <div class="section-header fade-in" style="margin-top:56px;">
      <h3><?php esc_html_e( 'Our Core Values', 'rcgen-theme' ); ?></h3>
    </div>
    <div class="services-grid fade-in" style="margin-top:32px;">
      <div class="service-card" style="border-top:4px solid var(--color-church);">
        <span class="service-icon">&#x1F54A;</span>
        <h4><?php esc_html_e( 'Faith', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Everything we do flows from our belief in Jesus Christ and His call to love God and love our neighbours as ourselves. (Deuteronomy 6:6-7)', 'rcgen-theme' ); ?></p>
      </div>
      <div class="service-card" style="border-top:4px solid var(--color-foundation);">
        <span class="service-icon">&#x1F91D;</span>
        <h4><?php esc_html_e( 'Service', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'We serve without expectation — giving our time, resources, and energy to those who need it most in the Vrygrond community.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="service-card" style="border-top:4px solid var(--color-educare);">
        <span class="service-icon">&#x2B50;</span>
        <h4><?php esc_html_e( 'Excellence', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'We believe the people we serve deserve the best. We pursue excellence in everything — from our crèche curriculum to our feeding programme.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="service-card" style="border-top:4px solid var(--color-gold);">
        <span class="service-icon">&#x1F4DC;</span>
        <h4><?php esc_html_e( 'Integrity', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'We operate with transparency and accountability. Donors and partners can trust that every rand and every resource is used for its intended purpose.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="service-card" style="border-top:4px solid var(--color-group);">
        <span class="service-icon">&#x1F46B;</span>
        <h4><?php esc_html_e( 'Unity', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Though we are four distinct organisations, we are one family with one heart. Together we are stronger, and together we achieve more for Vrygrond.', 'rcgen-theme' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ TIMELINE ═════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container" style="max-width:860px;">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Journey', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'How RCGEN Grew', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="steps-list fade-in">
      <div class="step-item">
        <div class="step-num">1</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'The Church is Born in Vrygrond', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'RCGEN began as a small, spirit-filled prayer group and worship gathering in the Vrygrond community. A few faithful people with a God-given vision to serve their neighbours.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">2</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Educare Centre Opens', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Recognising the need for quality early childhood education in Vrygrond, RCGEN Educare was registered as a formal ECD crèche serving children aged 0–6.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">3</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Feeding Scheme Launches', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'RCGEN Foundation was established to address food insecurity. What started as occasional food drives grew into a weekly feeding programme serving hundreds of meals to families in need.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">4</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Community Welfare Formalised', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'RCGEN Group was registered to formally provide humanitarian aid, elderly care, and crisis intervention — creating a holistic welfare net for the Vrygrond community.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num">5</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Today — 4 Organisations, One Mission', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'RCGEN now operates as four legally registered organisations under one umbrella — RCGEN (Church), RCGEN Educare, RCGEN Foundation, and RCGEN Group — each serving Vrygrond and beyond.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ 4 ORGANISATIONS ══════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Structure', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Our 4 Registered Organisations', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'Four distinct, legally registered organisations — each with its own mandate, all part of the RCGEN family.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="services-grid">
      <div class="service-card service-card--church fade-in">
        <span class="service-icon">&#x1F54A;&#xFE0F;</span>
        <h4><?php esc_html_e( 'RCGEN', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'The church. Spirit-led worship, pastoral care, and faith outreach in Vrygrond.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/rcgen' ) ); ?>" class="read-more" style="color:var(--color-church);"><?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?></a>
      </div>
      <div class="service-card service-card--educare fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F393;</span>
        <h4><?php esc_html_e( 'RCGEN Educare', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Registered crèche and ECD centre for children aged 0–6 in Vrygrond.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/rcgen-educare' ) ); ?>" class="read-more" style="color:var(--color-educare);"><?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?></a>
      </div>
      <div class="service-card service-card--foundation fade-in fade-in-delay-2">
        <span class="service-icon">&#x1F37D;&#xFE0F;</span>
        <h4><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Weekly feeding scheme providing nutritious meals and food support to families.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/rcgen-foundation' ) ); ?>" class="read-more" style="color:var(--color-foundation);"><?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?></a>
      </div>
      <div class="service-card service-card--group fade-in fade-in-delay-3">
        <span class="service-icon">&#x1F91D;</span>
        <h4><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Humanitarian aid, elderly care, crisis intervention, and community upliftment.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/rcgen-group' ) ); ?>" class="read-more" style="color:var(--color-group);"><?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?></a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ LEADERSHIP ═══════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Team', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Leadership &amp; Team', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'RCGEN is led by a dedicated team of pastors, administrators, educators, and community workers rooted in Vrygrond.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="team-grid">
      <div class="team-card fade-in">
        <div class="team-avatar">&#x1F468;&#x200D;&#x1F4BC;</div>
        <div class="team-card-body">
          <h4><?php esc_html_e( 'Ghydala', 'rcgen-theme' ); ?></h4>
          <p><strong><?php esc_html_e( 'Founder &amp; Director', 'rcgen-theme' ); ?></strong><br>
          <?php esc_html_e( 'RCGEN — Vrygrond, Cape Town', 'rcgen-theme' ); ?><br>
          <a href="mailto:info@rcgen.org.za">info@rcgen.org.za</a></p>
        </div>
      </div>
      <div class="team-card fade-in fade-in-delay-1">
        <div class="team-avatar">&#x1F469;&#x200D;&#x1F3EB;</div>
        <div class="team-card-body">
          <h4><?php esc_html_e( 'ECD Director', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'RCGEN Educare Centre', 'rcgen-theme' ); ?><br>
          <?php esc_html_e( 'Registered ECD Practitioner', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="team-card fade-in fade-in-delay-2">
        <div class="team-avatar">&#x1F469;&#x200D;&#x1F373;</div>
        <div class="team-card-body">
          <h4><?php esc_html_e( 'Feeding Programme Manager', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?><br>
          <?php esc_html_e( 'Weekly Feeding Scheme Coordinator', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="team-card fade-in fade-in-delay-3">
        <div class="team-avatar">&#x1F468;&#x200D;&#x1F91D;&#x200D;&#x1F468;</div>
        <div class="team-card-body">
          <h4><?php esc_html_e( 'Welfare Coordinator', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?><br>
          <?php esc_html_e( 'Community Welfare &amp; Humanitarian Aid', 'rcgen-theme' ); ?></p>
        </div>
      </div>
    </div>
    <div class="callout-box fade-in" style="margin-top:40px;max-width:700px;margin-left:auto;margin-right:auto;">
      <p><?php esc_html_e( 'Want to know more about our leadership or partner with RCGEN? Contact us at', 'rcgen-theme' ); ?> <a href="mailto:info@rcgen.org.za">info@rcgen.org.za</a> <?php esc_html_e( '· Website:', 'rcgen-theme' ); ?> <a href="https://rcgen.org.za">rcgen.org.za</a></p>
    </div>
  </div>
</section>

<!-- ═══ NPO REGISTRATION ═════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container" style="max-width:780px;text-align:center;">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Legal &amp; Governance', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Registered &amp; Accountable', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="grid-2" style="gap:24px;margin-top:0;">
      <div class="callout-box fade-in" style="text-align:left;">
        <p>
          <strong><?php esc_html_e( 'RCGEN (Church)', 'rcgen-theme' ); ?></strong><br>
          <?php esc_html_e( 'Registered Church Organisation', 'rcgen-theme' ); ?><br>
          <?php esc_html_e( 'Vrygrond, Cape Town, South Africa', 'rcgen-theme' ); ?>
        </p>
      </div>
      <div class="callout-box fade-in fade-in-delay-1" style="text-align:left;">
        <p>
          <strong><?php esc_html_e( 'RCGEN Educare', 'rcgen-theme' ); ?></strong><br>
          <?php esc_html_e( 'Registered ECD Centre', 'rcgen-theme' ); ?><br>
          <?php esc_html_e( 'Department of Social Development', 'rcgen-theme' ); ?>
        </p>
      </div>
      <div class="callout-box fade-in fade-in-delay-2" style="text-align:left;">
        <p>
          <strong><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></strong><br>
          <?php esc_html_e( 'Registered NPO — Feeding Scheme', 'rcgen-theme' ); ?><br>
          <?php esc_html_e( 'Website: rcgen.org.za', 'rcgen-theme' ); ?>
        </p>
      </div>
      <div class="callout-box fade-in fade-in-delay-3" style="text-align:left;">
        <p>
          <strong><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></strong><br>
          <?php esc_html_e( 'Registered Community Welfare Organisation', 'rcgen-theme' ); ?><br>
          <?php esc_html_e( 'Vrygrond, Cape Town, South Africa', 'rcgen-theme' ); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA ══════════════════════════════════════════════════════════════════ -->
<div class="page-cta-band">
  <div class="container">
    <h2><?php esc_html_e( 'Join the RCGEN Family', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'Whether you want to donate, volunteer, enrol a child, or simply learn more — we welcome you. RCGEN is rooted in Vrygrond and open to all.', 'rcgen-theme' ); ?></p>
    <div class="page-cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">
        &#x2709; <?php esc_html_e( 'Contact Us', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-outline">
        &#x2764; <?php esc_html_e( 'Donate Now', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/survey' ) ); ?>" class="btn btn-outline">
        &#x1F4CB; <?php esc_html_e( 'Take Our Survey', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
