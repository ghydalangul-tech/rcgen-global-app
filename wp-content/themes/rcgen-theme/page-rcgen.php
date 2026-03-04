<?php
/**
 * Template Name: RCGEN Church Page
 * Slug: rcgen  →  rcgen.org.za/rcgen/
 *
 * Formerly labelled "Ministry". Renamed to RCGEN (Church).
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero" style="background:linear-gradient(160deg,#0f2d6b 0%,#1e40af 100%);">
  <div class="container">
    <span class="section-tag" style="color:var(--color-gold);display:block;margin-bottom:10px;">
      &#x1F54A;&#xFE0F; <?php esc_html_e( 'Church &amp; Faith Outreach', 'rcgen-theme' ); ?>
    </span>
    <h1><?php esc_html_e( 'Welcome to RCGEN Church', 'rcgen-theme' ); ?></h1>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'RCGEN', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<!-- ═══ WELCOME ═════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="page-split">
      <div>
        <span class="section-tag"><?php esc_html_e( 'Who We Are', 'rcgen-theme' ); ?></span>
        <h2><?php esc_html_e( 'A Spirit-Led Church in the Heart of Vrygrond', 'rcgen-theme' ); ?></h2>
        <p><?php esc_html_e( 'RCGEN is a registered, spirit-filled church based in Vrygrond, Cape Town. We are a community of believers committed to worshipping God, caring for one another, and reaching out to those in need around us.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'We believe that the Gospel of Jesus Christ has the power to transform individuals, families, and entire communities. That belief drives everything we do — from our Sunday services to our daily outreach programs in Vrygrond and surrounds.', 'rcgen-theme' ); ?></p>

        <div class="inline-stats">
          <div class="inline-stat">
            <span class="num">10+</span>
            <span class="lbl"><?php esc_html_e( 'Years Active', 'rcgen-theme' ); ?></span>
          </div>
          <div class="inline-stat">
            <span class="num">&#x221E;</span>
            <span class="lbl"><?php esc_html_e( 'Lives Touched', 'rcgen-theme' ); ?></span>
          </div>
          <div class="inline-stat">
            <span class="num">4</span>
            <span class="lbl"><?php esc_html_e( 'Linked Organisations', 'rcgen-theme' ); ?></span>
          </div>
        </div>

        <a href="#services" class="btn btn-navy"><?php esc_html_e( 'Our Services', 'rcgen-theme' ); ?></a>
      </div>
      <div class="page-split-img" aria-hidden="true">&#x1F54A;&#xFE0F;</div>
    </div>
  </div>
</section>

<!-- ═══ VISION & MISSION ════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Purpose', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Vision &amp; Mission', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="grid-2" style="gap:32px;margin-top:40px;">
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-church);">
        <h4 style="color:var(--color-church);margin-bottom:10px;font-family:var(--font-heading);">
          &#x1F441; <?php esc_html_e( 'Our Vision', 'rcgen-theme' ); ?>
        </h4>
        <p><?php esc_html_e( 'To see Vrygrond and the broader Cape Town community transformed by the love of Jesus Christ — where every person knows their worth, belongs to a community, and lives with dignity and hope.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="callout-box" style="background:#eff6ff;border-left-color:var(--color-gold);">
        <h4 style="color:var(--color-gold-dark);margin-bottom:10px;font-family:var(--font-heading);">
          &#x1F3AF; <?php esc_html_e( 'Our Mission', 'rcgen-theme' ); ?>
        </h4>
        <p><?php esc_html_e( 'To preach the Gospel, make disciples, and serve the poor and marginalised through spirit-led worship, pastoral care, and practical community outreach in the name of Jesus.', 'rcgen-theme' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES ════════════════════════════════════════════════════════════ -->
<section id="services" class="page-section page-section--white">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Join Us', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Our Church Services &amp; Programs', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'All are welcome at RCGEN. Whether you are seeking God for the first time or returning to faith, there is a place for you here.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="services-grid">

      <div class="service-card service-card--church fade-in">
        <span class="service-icon">&#x26EA;</span>
        <h4><?php esc_html_e( 'Sunday Worship Service', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Every Sunday at 09:00. Spirit-filled worship, powerful preaching, and a warm community welcome. Bring the whole family.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--church fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F64F;</span>
        <h4><?php esc_html_e( 'Prayer Meetings', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Midweek prayer gatherings for intercession, community prayer, and seeking God together. Wednesdays at 18:00.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--church fade-in fade-in-delay-2">
        <span class="service-icon">&#x1F31F;</span>
        <h4><?php esc_html_e( 'Youth Ministry', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'An engaging, relevant ministry for teenagers and young adults. Bible study, mentorship, and fun community activities every Friday.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--church fade-in fade-in-delay-3">
        <span class="service-icon">&#x1F91D;</span>
        <h4><?php esc_html_e( 'Community Outreach', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Regular outreach in Vrygrond — visiting the sick and elderly, sharing the Gospel, and serving practical needs in Jesus\'s name.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--church fade-in">
        <span class="service-icon">&#x1F4D6;</span>
        <h4><?php esc_html_e( 'Bible Study &amp; Discipleship', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Small group Bible studies for all ages and spiritual backgrounds. Grow in your faith alongside fellow believers.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--church fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F46A;</span>
        <h4><?php esc_html_e( 'Family &amp; Pastoral Care', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Pastoral counselling, family support, and prayer for those walking through difficult seasons. You are not alone.', 'rcgen-theme' ); ?></p>
      </div>

    </div>
  </div>
</section>

<!-- ═══ LOCATION ════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--navy">
  <div class="container">
    <div class="page-split">
      <div>
        <span class="section-tag" style="color:var(--color-gold);"><?php esc_html_e( 'Find Us', 'rcgen-theme' ); ?></span>
        <h2><?php esc_html_e( 'We Are in Vrygrond, Cape Town', 'rcgen-theme' ); ?></h2>
        <p><?php esc_html_e( 'RCGEN Church is located in the Vrygrond community of Cape Town, South Africa. We are your local church — rooted in the community, serving our neighbours.', 'rcgen-theme' ); ?></p>

        <div style="display:flex;flex-direction:column;gap:14px;margin-top:24px;">
          <div style="display:flex;gap:14px;align-items:flex-start;">
            <span style="font-size:1.2rem;">&#x1F4CD;</span>
            <div>
              <strong style="color:var(--color-gold);display:block;font-size:0.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:3px;"><?php esc_html_e( 'Location', 'rcgen-theme' ); ?></strong>
              <span><?php esc_html_e( 'Vrygrond, Cape Town, South Africa', 'rcgen-theme' ); ?></span>
            </div>
          </div>
          <div style="display:flex;gap:14px;align-items:flex-start;">
            <span style="font-size:1.2rem;">&#x1F550;</span>
            <div>
              <strong style="color:var(--color-gold);display:block;font-size:0.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:3px;"><?php esc_html_e( 'Sunday Service', 'rcgen-theme' ); ?></strong>
              <span><?php esc_html_e( 'Every Sunday — 09:00 AM', 'rcgen-theme' ); ?></span>
            </div>
          </div>
          <div style="display:flex;gap:14px;align-items:flex-start;">
            <span style="font-size:1.2rem;">&#x1F310;</span>
            <div>
              <strong style="color:var(--color-gold);display:block;font-size:0.82rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:3px;"><?php esc_html_e( 'Website', 'rcgen-theme' ); ?></strong>
              <span><a href="https://rcgen.org.za" style="color:var(--color-gold);">rcgen.org.za</a></span>
            </div>
          </div>
        </div>
      </div>
      <div class="page-split-img" aria-hidden="true" style="background:linear-gradient(135deg,#1e40af,#1a56db);">&#x1F3D9;</div>
    </div>
  </div>
</section>

<!-- ═══ CTA ══════════════════════════════════════════════════════════════════ -->
<div class="page-cta-band">
  <div class="container">
    <h2><?php esc_html_e( 'Come as You Are — Everyone Is Welcome', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'Whether you are new to faith or returning after years away, RCGEN Church welcomes you. Join us this Sunday in Vrygrond.', 'rcgen-theme' ); ?></p>
    <div class="page-cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">
        &#x2709; <?php esc_html_e( 'Get In Touch', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-outline">
        &#x2764; <?php esc_html_e( 'Support RCGEN', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
