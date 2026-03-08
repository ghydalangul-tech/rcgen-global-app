<?php
/**
 * Template Name: RCGEN Group Page
 * Slug: rcgen-group  →  rcgen.org.za/rcgen-group/
 * Organisation: Community Welfare & Humanitarian Aid
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero" style="background:linear-gradient(160deg,#0f2d6b 0%,#1a56db 100%);">
  <div class="container">
    <span class="section-tag" style="color:var(--color-gold);display:block;margin-bottom:10px;">
      &#x1F91D; <?php esc_html_e( 'Community Welfare &amp; Humanitarian Aid', 'rcgen-theme' ); ?>
    </span>
    <h1><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></h1>
    <p style="color:rgba(255,255,255,0.85);font-size:1rem;margin-top:8px;font-style:italic;">
      <?php esc_html_e( 'Uplifting Communities. Restoring Dignity. Enabling Hope.', 'rcgen-theme' ); ?>
    </p>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<!-- ═══ SECTION 1: ABOUT ═════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="page-split">
      <div>
        <span class="section-tag"><?php esc_html_e( 'About RCGEN Group', 'rcgen-theme' ); ?></span>
        <h2><?php esc_html_e( 'Community Welfare Rooted in Dignity', 'rcgen-theme' ); ?></h2>
        <p><?php esc_html_e( 'RCGEN Group is our registered community welfare and humanitarian aid organisation based in Vrygrond, Cape Town, South Africa. We work alongside the most vulnerable members of our community — providing practical support, resources, and upliftment programmes that restore dignity and create lasting change.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'We believe every person deserves to live with dignity. Through our programmes, we walk alongside individuals and families facing poverty, unemployment, and social challenges — offering not just assistance, but genuine hope and long-term empowerment.', 'rcgen-theme' ); ?></p>
        <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-navy);">
          <p><?php esc_html_e( '"We do not just help people survive — we walk with them towards dignity, hope, and lasting transformation."', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="page-split-img" aria-hidden="true" style="background:linear-gradient(135deg,#0f2d6b,#1a56db);">&#x1F91D;</div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 2: WHAT WE DO ════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Services', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'What We Do', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'A comprehensive range of welfare programmes tailored to the real needs of Vrygrond and surrounding communities.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="services-grid">

      <div class="service-card service-card--group fade-in">
        <span class="service-icon">&#x1F91D;</span>
        <h4><?php esc_html_e( 'Humanitarian Aid', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Emergency food parcels, blankets, clothing, and essential items for families in crisis.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F476;</span>
        <h4><?php esc_html_e( 'Child &amp; Youth Support', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Holiday programmes, back-to-school support, and youth development activities.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in fade-in-delay-2">
        <span class="service-icon">&#x1F469;&#x200D;&#x1F467;</span>
        <h4><?php esc_html_e( 'Family Support Services', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Practical assistance and referrals for families experiencing hardship or domestic challenges.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in fade-in-delay-3">
        <span class="service-icon">&#x1F4CB;</span>
        <h4><?php esc_html_e( 'Social Welfare Referrals', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Connecting community members with SASSA, government services, and other support organisations.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in">
        <span class="service-icon">&#x1F393;</span>
        <h4><?php esc_html_e( 'Skills Development', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Basic skills training and workshops to empower adults with practical capabilities for employment.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in fade-in-delay-1">
        <span class="service-icon">&#x2764;&#xFE0F;</span>
        <h4><?php esc_html_e( 'Special Events &amp; Outreach', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Christmas parties, Easter events, and community outreach days bringing joy to Vrygrond.', 'rcgen-theme' ); ?></p>
      </div>

    </div>
  </div>
</section>

<!-- ═══ SECTION 3: WHO WE SERVE ══════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container" style="max-width:860px;">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Community', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Who We Serve', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'We serve children, youth, adults, and the elderly in Vrygrond and surrounding areas who face:', 'rcgen-theme' ); ?></p>
    </div>
    <div class="grid-2 fade-in" style="gap:20px;margin-top:32px;">
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-navy);">
        <p>&#x1F4B8; <strong><?php esc_html_e( 'Poverty &amp; Unemployment', 'rcgen-theme' ); ?></strong><br>
        <?php esc_html_e( 'Families and individuals without income or economic stability.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-navy);">
        <p>&#x1F371; <strong><?php esc_html_e( 'Food Insecurity', 'rcgen-theme' ); ?></strong><br>
        <?php esc_html_e( 'Children and families who do not have enough to eat.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-navy);">
        <p>&#x1F6AB; <strong><?php esc_html_e( 'Lack of Access to Services', 'rcgen-theme' ); ?></strong><br>
        <?php esc_html_e( 'People who struggle to navigate government services and grants.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-navy);">
        <p>&#x1F3E0; <strong><?php esc_html_e( 'Domestic &amp; Social Challenges', 'rcgen-theme' ); ?></strong><br>
        <?php esc_html_e( 'Families experiencing GBV, crisis situations, or social breakdown.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-navy);">
        <p>&#x1F9D3; <strong><?php esc_html_e( 'Vulnerability Due to Age or Disability', 'rcgen-theme' ); ?></strong><br>
        <?php esc_html_e( 'Elderly residents and people with disabilities who need extra care and support.', 'rcgen-theme' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SECTION 4: GET INVOLVED ══════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Get Involved', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Make a Difference Today', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'There are many ways to support RCGEN Group and the vulnerable people of Vrygrond.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="services-grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr));">

      <div class="service-card fade-in" style="border-top:4px solid var(--color-gold);display:flex;flex-direction:column;">
        <span class="service-icon">&#x2764;&#xFE0F;</span>
        <h4><?php esc_html_e( 'Donate', 'rcgen-theme' ); ?></h4>
        <p style="flex:1;"><?php esc_html_e( 'Your financial gift directly funds our humanitarian programmes — from emergency aid parcels to youth development.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/donations' ) ); ?>" class="btn btn-primary" style="margin-top:20px;text-align:center;">
          <?php esc_html_e( 'Donate Now', 'rcgen-theme' ); ?>
        </a>
      </div>

      <div class="service-card fade-in fade-in-delay-1" style="border-top:4px solid var(--color-navy);display:flex;flex-direction:column;">
        <span class="service-icon">&#x1F64C;</span>
        <h4><?php esc_html_e( 'Volunteer', 'rcgen-theme' ); ?></h4>
        <p style="flex:1;"><?php esc_html_e( 'Give your time and skills to help transform lives in Vrygrond. No experience needed — just a willing heart.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-navy" style="margin-top:20px;text-align:center;">
          <?php esc_html_e( 'Contact Us', 'rcgen-theme' ); ?>
        </a>
      </div>

      <div class="service-card fade-in fade-in-delay-2" style="border-top:4px solid #16a34a;display:flex;flex-direction:column;">
        <span class="service-icon">&#x1F91D;</span>
        <h4><?php esc_html_e( 'Partner With Us', 'rcgen-theme' ); ?></h4>
        <p style="flex:1;"><?php esc_html_e( 'Churches, businesses, and organisations — let\'s work together to multiply our impact in Vrygrond and beyond.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline" style="margin-top:20px;text-align:center;">
          <?php esc_html_e( 'Contact Us', 'rcgen-theme' ); ?>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ═══ SECTION 5: CONTACT ════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container" style="max-width:680px;text-align:center;">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Reach Out', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Contact RCGEN Group', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="callout-box fade-in" style="background:#eff6ff;border-left-color:var(--color-navy);text-align:left;margin-top:32px;">
      <p style="font-size:1rem;line-height:1.9;">
        <strong><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></strong><br>
        &#x1F4CD; <?php esc_html_e( 'Vrygrond, Cape Town', 'rcgen-theme' ); ?><br>
        <?php esc_html_e( 'Western Cape, South Africa', 'rcgen-theme' ); ?><br>
        &#x2709; <a href="mailto:info@rcgen.org.za">info@rcgen.org.za</a><br>
        &#x1F310; <a href="https://rcgen.org.za">rcgen.org.za</a>
      </p>
    </div>
    <p class="fade-in" style="margin-top:24px;color:#6b7280;font-size:0.9rem;">
      <?php esc_html_e( 'We respond to all messages within 24–48 hours on weekdays. For urgent welfare matters, please email us directly.', 'rcgen-theme' ); ?>
    </p>
  </div>
</section>

<!-- ═══ CTA ══════════════════════════════════════════════════════════════════ -->
<div class="page-cta-band">
  <div class="container">
    <h2><?php esc_html_e( 'No One in Vrygrond Should Face Hardship Alone', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'RCGEN Group is here for the whole community. Reach out, get involved, or support our work today.', 'rcgen-theme' ); ?></p>
    <div class="page-cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">
        &#x2709; <?php esc_html_e( 'Get In Touch', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/donations' ) ); ?>" class="btn btn-outline">
        &#x2764; <?php esc_html_e( 'Support Our Work', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
