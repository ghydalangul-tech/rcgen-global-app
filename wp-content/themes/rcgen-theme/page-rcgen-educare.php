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
    <p style="color:rgba(255,255,255,0.85);font-size:1rem;margin-top:8px;font-style:italic;">
      <?php esc_html_e( 'Building Bright Futures from the Very Beginning', 'rcgen-theme' ); ?>
    </p>
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

<!-- ═══ WHY ECD MATTERS ════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'The Research', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Why Early Childhood Development Matters', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="page-split fade-in">
      <div>
        <p><?php esc_html_e( 'Research shows that 90% of brain development happens before the age of 5. The experiences, relationships, and environments a child encounters in their first years have a profound, lasting impact on their cognitive ability, emotional wellbeing, and future success.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'In communities like Vrygrond where poverty and instability are common, quality early childhood education is not a luxury — it is one of the most powerful interventions available to break the cycle of poverty and give children a fighting chance.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'Every learner who passes through RCGEN Educare is better equipped to succeed in primary school, build healthy relationships, and contribute positively to their community. Investing in the early years is investing in the future of Vrygrond.', 'rcgen-theme' ); ?></p>
      </div>
      <div>
        <div class="callout-box" style="background:#fff;border-left-color:var(--color-educare);text-align:center;">
          <p style="font-size:3rem;font-weight:800;color:var(--color-educare);margin-bottom:8px;">90%</p>
          <p><strong><?php esc_html_e( 'of brain development happens before age 5', 'rcgen-theme' ); ?></strong></p>
        </div>
        <div class="callout-box" style="background:#fff;border-left-color:var(--color-gold);text-align:center;margin-top:20px;">
          <p style="font-size:3rem;font-weight:800;color:var(--color-gold-dark);margin-bottom:8px;">45+</p>
          <p><strong><?php esc_html_e( 'learners currently enrolled at RCGEN Educare', 'rcgen-theme' ); ?></strong></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ REGISTRATION ═════════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container" style="max-width:780px;">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Enrol Your Child', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Registration Information', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="steps-list fade-in">
      <div class="step-item">
        <div class="step-num" style="background:var(--color-educare);">1</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Open Throughout the Year', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'RCGEN Educare accepts registrations throughout the year, subject to availability. We serve children from Vrygrond and surrounding communities in Cape Town.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num" style="background:var(--color-educare);">2</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Contact Us to Enquire', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Reach out via email or visit us in Vrygrond. Our staff will guide you through the registration process and answer any questions.', 'rcgen-theme' ); ?>
          <br><a href="mailto:info@rcgen.org.za" style="color:var(--color-educare);font-weight:600;">info@rcgen.org.za</a></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num" style="background:var(--color-educare);">3</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Visit Our Centre', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'We welcome families to visit RCGEN Educare and meet our team. See our facilities, meet the teachers, and ensure it is the right fit for your child.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num" style="background:var(--color-educare);">4</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Complete Registration', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Once accepted, complete the registration forms and your child can begin at RCGEN Educare. We will ensure a warm and welcoming start for every new learner.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
    </div>
    <div class="callout-box fade-in" style="background:#e0f2fe;border-left-color:var(--color-educare);margin-top:32px;">
      <p>&#x1F4E7; <strong><?php esc_html_e( 'Enquire now:', 'rcgen-theme' ); ?></strong>
      <a href="mailto:info@rcgen.org.za">info@rcgen.org.za</a> <?php esc_html_e( '· Website:', 'rcgen-theme' ); ?> <a href="https://rcgen.org.za">rcgen.org.za</a></p>
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
