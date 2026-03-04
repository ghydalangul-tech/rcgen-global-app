<?php
/**
 * Template Name: RCGEN Educare Page
 * Slug: rcgen-educare  →  rcgen.org.za/rcgen-educare/
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero" style="background:linear-gradient(160deg,#075985 0%,#0284c7 100%);">
  <div class="container">
    <span class="section-tag" style="color:#bae6fd;display:block;margin-bottom:10px;">
      &#x1F393; <?php esc_html_e( 'Early Childhood Education', 'rcgen-theme' ); ?>
    </span>
    <h1><?php esc_html_e( 'RCGEN Educare', 'rcgen-theme' ); ?></h1>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'RCGEN Educare', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<!-- ═══ ABOUT ════════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="page-split">
      <div>
        <span class="section-tag"><?php esc_html_e( 'About Our Crèche', 'rcgen-theme' ); ?></span>
        <h2><?php esc_html_e( 'Building Bright Futures from Day One', 'rcgen-theme' ); ?></h2>
        <p><?php esc_html_e( 'RCGEN Educare is a registered crèche and Early Childhood Development (ECD) centre in Vrygrond, Cape Town. We provide quality, nurturing education and care for children aged 0 to 6 years old.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'We believe that a strong foundation in the earliest years shapes the rest of a child\'s life. At RCGEN Educare, every child is valued, loved, and given the best possible start through structured learning, play, nutritious meals, and a safe, caring environment.', 'rcgen-theme' ); ?></p>

        <div class="inline-stats">
          <div class="inline-stat">
            <span class="num" style="color:var(--color-educare);">0–6</span>
            <span class="lbl"><?php esc_html_e( 'Ages Accepted', 'rcgen-theme' ); ?></span>
          </div>
          <div class="inline-stat">
            <span class="num" style="color:var(--color-educare);">&#x2714;</span>
            <span class="lbl"><?php esc_html_e( 'Registered ECD', 'rcgen-theme' ); ?></span>
          </div>
          <div class="inline-stat">
            <span class="num" style="color:var(--color-educare);">&#x2665;</span>
            <span class="lbl"><?php esc_html_e( 'Safe &amp; Nurturing', 'rcgen-theme' ); ?></span>
          </div>
        </div>
      </div>
      <div class="page-split-img" aria-hidden="true" style="background:linear-gradient(135deg,#075985,#0284c7);">&#x1F393;</div>
    </div>
  </div>
</section>

<!-- ═══ WHAT WE OFFER ════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Programme', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'What We Offer at RCGEN Educare', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'A holistic, CAPS-aligned curriculum that nurtures the whole child — academically, emotionally, physically, and spiritually.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="services-grid">

      <div class="service-card service-card--educare fade-in">
        <span class="service-icon">&#x1F4DA;</span>
        <h4><?php esc_html_e( 'Structured Learning', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Age-appropriate, CAPS-aligned activities that build language, numeracy, creativity, and critical thinking from toddler to Grade R level.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--educare fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F35C;</span>
        <h4><?php esc_html_e( 'Nutritious Daily Meals', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Children receive healthy, balanced meals each day. Good nutrition is essential for learning, growth, and development.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--educare fade-in fade-in-delay-2">
        <span class="service-icon">&#x1F3CB;</span>
        <h4><?php esc_html_e( 'School Readiness', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Our Grade R programme prepares children for Grade 1. We focus on literacy, numeracy, social skills, and self-confidence so they start school ready to thrive.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--educare fade-in fade-in-delay-3">
        <span class="service-icon">&#x1F6E1;&#xFE0F;</span>
        <h4><?php esc_html_e( 'Safe Environment', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'A secure, child-friendly space where every learner is known by name, respected, and cared for by trained, compassionate staff.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--educare fade-in">
        <span class="service-icon">&#x1F9E0;</span>
        <h4><?php esc_html_e( 'Stimulating Play &amp; Activity', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Play is how young children learn best. Our programme balances structured lessons with creative play, music, art, and outdoor activities.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--educare fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F46A;</span>
        <h4><?php esc_html_e( 'Parent &amp; Family Support', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'We partner with parents and caregivers through regular communication, parent meetings, and family engagement to support each child\'s development at home.', 'rcgen-theme' ); ?></p>
      </div>

    </div>
  </div>
</section>

<!-- ═══ AGE GROUPS ══════════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container" style="max-width:860px;">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Enrolment', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Age Groups &amp; Classes', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="steps-list fade-in">
      <div class="step-item">
        <div class="step-num" style="background:var(--color-educare);">1</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Babies &amp; Toddlers — Ages 0–2', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Nurturing, safe care for infants and toddlers. Our caregivers provide a warm, stimulating environment that supports every developmental milestone.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num" style="background:var(--color-educare);">2</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Pre-School — Ages 3–4', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Creative learning through play, storytelling, and structured activity. Building confidence, language, and social skills in a fun, supportive setting.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num" style="background:var(--color-educare);">3</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Grade R — Ages 5–6', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Full CAPS-aligned Grade R programme preparing children for primary school. Literacy, numeracy, and school readiness with qualified teachers.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
    </div>

    <div class="callout-box" style="background:#e0f2fe;border-left-color:var(--color-educare);margin-top:40px;">
      <p><strong><?php esc_html_e( 'Enrolment is open.', 'rcgen-theme' ); ?></strong>
      <?php esc_html_e( ' We welcome children from the Vrygrond community and surrounding areas. Contact us to arrange a visit and see our facilities.', 'rcgen-theme' ); ?></p>
    </div>
  </div>
</section>

<!-- ═══ CTA ══════════════════════════════════════════════════════════════════ -->
<div class="page-cta-band" style="background:linear-gradient(135deg,#075985,#0284c7);">
  <div class="container">
    <h2><?php esc_html_e( 'Give Your Child the Best Start in Vrygrond', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'Enrolment is open for children aged 0–6. Visit us or send an enquiry today — we would love to meet your family.', 'rcgen-theme' ); ?></p>
    <div class="page-cta-actions">
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">
        &#x1F4CB; <?php esc_html_e( 'Enquire About Enrolment', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/survey' ) ); ?>" class="btn btn-outline">
        <?php esc_html_e( 'Fill In Our Survey', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
