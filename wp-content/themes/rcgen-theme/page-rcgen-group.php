<?php
/**
 * Template Name: RCGEN Group Page
 * Slug: rcgen-group  →  rcgen.org.za/rcgen-group/
 * Organisation: Community Welfare & Humanitarian Aid
 * (Previously called "NGN Help")
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero" style="background:linear-gradient(160deg,#7c2d12 0%,#ea580c 100%);">
  <div class="container">
    <span class="section-tag" style="color:#fed7aa;display:block;margin-bottom:10px;">
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

<!-- ═══ ABOUT ════════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="page-split">
      <div>
        <span class="section-tag"><?php esc_html_e( 'Who We Are', 'rcgen-theme' ); ?></span>
        <h2><?php esc_html_e( 'Serving Vrygrond\'s Most Vulnerable', 'rcgen-theme' ); ?></h2>
        <p><?php esc_html_e( 'RCGEN Group is the registered community welfare and humanitarian aid organisation within the RCGEN family. We exist to walk alongside the most vulnerable members of the Vrygrond community — providing practical support, compassionate care, and a pathway to dignity.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'From elderly residents who need daily assistance, to families in crisis who need emergency intervention, to individuals who simply need someone to listen — RCGEN Group is there. We believe no one in Vrygrond should face hardship alone.', 'rcgen-theme' ); ?></p>

        <div class="callout-box" style="background:#fff7ed;border-left-color:var(--color-group);">
          <p><?php esc_html_e( '"We do not just help people survive — we come alongside them with dignity, compassion, and practical support until they can stand on their own."', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="page-split-img" aria-hidden="true" style="background:linear-gradient(135deg,#7c2d12,#ea580c);">&#x1F91D;</div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES ════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Services', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Community Welfare Services', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'A comprehensive range of humanitarian services tailored to the real needs of the Vrygrond community.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="services-grid">

      <div class="service-card service-card--group fade-in">
        <span class="service-icon">&#x1F9D3;</span>
        <h4><?php esc_html_e( 'Elderly Care Programme', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Regular home visits, companionship, and practical assistance for elderly residents in Vrygrond who are isolated or unable to care for themselves fully.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F6A8;</span>
        <h4><?php esc_html_e( 'Crisis Intervention', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Emergency support for families and individuals in crisis — including gender-based violence situations, sudden unemployment, eviction, and acute poverty.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in fade-in-delay-2">
        <span class="service-icon">&#x1F4E6;</span>
        <h4><?php esc_html_e( 'Humanitarian Aid', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Emergency clothing, household goods, hygiene packs, and essential supplies for families in immediate need across Vrygrond and surrounds.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in fade-in-delay-3">
        <span class="service-icon">&#x1F9E0;</span>
        <h4><?php esc_html_e( 'Counselling &amp; Referrals', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Compassionate listening and professional referrals to social services, mental health resources, government grants, and legal aid where needed.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in">
        <span class="service-icon">&#x1F3D8;&#xFE0F;</span>
        <h4><?php esc_html_e( 'Community Upliftment', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Skills development workshops, community cleaning drives, and neighbourhood initiatives that build pride and improve living conditions in Vrygrond.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--group fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F91D;</span>
        <h4><?php esc_html_e( 'Volunteer Network', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'We mobilise and train community volunteers to extend our reach. Join our team and make a tangible difference in Vrygrond.', 'rcgen-theme' ); ?></p>
      </div>

    </div>
  </div>
</section>

<!-- ═══ ELDERLY CARE DETAIL ══════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="page-split reverse">
      <div class="page-split-img" aria-hidden="true" style="background:linear-gradient(135deg,#ea580c,#f97316);">&#x1F9D3;</div>
      <div>
        <span class="section-tag"><?php esc_html_e( 'Elderly Care', 'rcgen-theme' ); ?></span>
        <h2><?php esc_html_e( 'Honouring Our Elders in Vrygrond', 'rcgen-theme' ); ?></h2>
        <p><?php esc_html_e( 'Many elderly residents in Vrygrond live alone, with limited mobility, and without family nearby. RCGEN Group\'s elderly care programme is designed to change that — one visit at a time.', 'rcgen-theme' ); ?></p>
        <div class="steps-list">
          <div class="step-item">
            <div class="step-num" style="background:var(--color-group);">&#x2714;</div>
            <div class="step-body">
              <h4><?php esc_html_e( 'Regular Home Visits', 'rcgen-theme' ); ?></h4>
              <p><?php esc_html_e( 'Trained volunteers visit elderly community members at home — checking on their wellbeing, helping with tasks, and providing companionship.', 'rcgen-theme' ); ?></p>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num" style="background:var(--color-group);">&#x2714;</div>
            <div class="step-body">
              <h4><?php esc_html_e( 'Welfare Grant Assistance', 'rcgen-theme' ); ?></h4>
              <p><?php esc_html_e( 'We help elderly residents navigate SASSA grant applications and access the government support they are entitled to.', 'rcgen-theme' ); ?></p>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num" style="background:var(--color-group);">&#x2714;</div>
            <div class="step-body">
              <h4><?php esc_html_e( 'Meals &amp; Essentials', 'rcgen-theme' ); ?></h4>
              <p><?php esc_html_e( 'In partnership with RCGEN Foundation, elderly residents are prioritised for food parcels and meal deliveries.', 'rcgen-theme' ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ HOW TO GET HELP / VOLUNTEER ═════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container" style="max-width:860px;">
    <div class="grid-2" style="gap:40px;margin-top:0;">
      <div class="fade-in">
        <h3 style="color:var(--color-group);margin-bottom:16px;">&#x1F198; <?php esc_html_e( 'Need Help?', 'rcgen-theme' ); ?></h3>
        <p><?php esc_html_e( 'If you or someone you know in Vrygrond needs community welfare support, please reach out to us. We treat all enquiries with confidentiality and compassion.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'No situation is too small or too big. We are here to help.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-navy" style="margin-top:8px;">
          <?php esc_html_e( 'Contact RCGEN Group', 'rcgen-theme' ); ?>
        </a>
      </div>
      <div class="fade-in fade-in-delay-1">
        <h3 style="color:var(--color-group);margin-bottom:16px;">&#x1F91D; <?php esc_html_e( 'Want to Volunteer?', 'rcgen-theme' ); ?></h3>
        <p><?php esc_html_e( 'We are always looking for compassionate, committed community members to join our volunteer team. Whether you have a few hours a week or can commit to regular service — we have a place for you.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'No qualifications needed — just a heart for your community.', 'rcgen-theme' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/survey' ) ); ?>" class="btn btn-navy" style="margin-top:8px;">
          <?php esc_html_e( 'Register as Volunteer', 'rcgen-theme' ); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CTA ══════════════════════════════════════════════════════════════════ -->
<div class="page-cta-band" style="background:linear-gradient(135deg,#7c2d12,#ea580c);">
  <div class="container">
    <h2><?php esc_html_e( 'No One in Vrygrond Should Face Hardship Alone', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'RCGEN Group is here for the whole community — from crisis support to elderly care. Reach out, get involved, or support our work.', 'rcgen-theme' ); ?></p>
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
