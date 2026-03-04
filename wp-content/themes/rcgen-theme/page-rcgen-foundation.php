<?php
/**
 * Template Name: RCGEN Foundation Page
 * Slug: rcgen-foundation  →  rcgen.org.za/rcgen-foundation/
 * Organisation: Feeding Scheme & Nutrition
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero" style="background:linear-gradient(160deg,#14532d 0%,#16a34a 100%);">
  <div class="container">
    <span class="section-tag" style="color:#bbf7d0;display:block;margin-bottom:10px;">
      &#x1F37D;&#xFE0F; <?php esc_html_e( 'Feeding Scheme &amp; Nutrition', 'rcgen-theme' ); ?>
    </span>
    <h1><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></h1>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<!-- ═══ ABOUT ════════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="page-split">
      <div>
        <span class="section-tag"><?php esc_html_e( 'Who We Are', 'rcgen-theme' ); ?></span>
        <h2><?php esc_html_e( 'No Child in Vrygrond Should Go Hungry', 'rcgen-theme' ); ?></h2>
        <p><?php esc_html_e( 'RCGEN Foundation is the registered feeding scheme arm of the RCGEN family of organisations. We exist to address food insecurity in the Vrygrond community by providing nutritious, warm meals to children and families who need them most.', 'rcgen-theme' ); ?></p>
        <p><?php esc_html_e( 'Every week, our dedicated volunteers and staff prepare and distribute meals across Vrygrond. We believe that access to food is not a privilege — it is a right. And we will keep showing up until no one in our community goes without.', 'rcgen-theme' ); ?></p>

        <div class="inline-stats">
          <div class="inline-stat">
            <span class="num" style="color:var(--color-foundation);">100s</span>
            <span class="lbl"><?php esc_html_e( 'Meals Weekly', 'rcgen-theme' ); ?></span>
          </div>
          <div class="inline-stat">
            <span class="num" style="color:var(--color-foundation);">&#x1F35C;</span>
            <span class="lbl"><?php esc_html_e( 'Hot &amp; Nutritious', 'rcgen-theme' ); ?></span>
          </div>
          <div class="inline-stat">
            <span class="num" style="color:var(--color-foundation);">52</span>
            <span class="lbl"><?php esc_html_e( 'Weeks a Year', 'rcgen-theme' ); ?></span>
          </div>
        </div>

        <div class="callout-box green">
          <p><strong><?php esc_html_e( 'Your donation feeds a family.', 'rcgen-theme' ); ?></strong>
          <?php esc_html_e( ' Every rand donated to RCGEN Foundation goes directly towards buying ingredients, cooking meals, and distributing food parcels in Vrygrond.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="page-split-img" aria-hidden="true" style="background:linear-gradient(135deg,#14532d,#16a34a);">&#x1F37D;&#xFE0F;</div>
    </div>
  </div>
</section>

<!-- ═══ HOW IT WORKS ══════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Our Programme', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'How the Feeding Scheme Works', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'Every week, a small army of volunteers makes it happen. Here\'s how we go from donations to full plates.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="steps-list fade-in" style="max-width:700px;margin:40px auto 0;">
      <div class="step-item">
        <div class="step-num" style="background:var(--color-foundation);">1</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Donations Received', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Monetary donations, food items, and dry goods are received from generous donors, churches, businesses, and community members throughout the week.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num" style="background:var(--color-foundation);">2</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Meals are Prepared', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Our volunteer team prepares hot, nutritious meals at the RCGEN kitchen. We focus on balanced, filling food — especially for the children.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num" style="background:var(--color-foundation);">3</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Distribution Day', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'Every week, meals and food parcels are distributed to families across Vrygrond — prioritising children, the elderly, and families in crisis.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
      <div class="step-item">
        <div class="step-num" style="background:var(--color-foundation);">4</div>
        <div class="step-body">
          <h4><?php esc_html_e( 'Community Follow-Up', 'rcgen-theme' ); ?></h4>
          <p><?php esc_html_e( 'We connect families with other RCGEN services — RCGEN Group welfare support, Educare enrolment, and church community — for holistic care.', 'rcgen-theme' ); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES / WAYS TO HELP ══════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Get Involved', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'How You Can Help', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'There are many ways to support the RCGEN Foundation feeding programme. Every contribution — large or small — makes a real difference.', 'rcgen-theme' ); ?></p>
    </div>
    <div class="services-grid">

      <div class="service-card service-card--foundation fade-in">
        <span class="service-icon">&#x1F4B3;</span>
        <h4><?php esc_html_e( 'Donate Money', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Financial donations allow us to purchase fresh ingredients and expand the programme. Donate via EFT or SnapScan. Every rand feeds a child.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--foundation fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F6D2;</span>
        <h4><?php esc_html_e( 'Donate Food', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Drop off non-perishable food items — maize meal, rice, canned goods, cooking oil. Contact us for drop-off details and current needs.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--foundation fade-in fade-in-delay-2">
        <span class="service-icon">&#x1F9CF;</span>
        <h4><?php esc_html_e( 'Volunteer', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Join our volunteer team on distribution day. Help with cooking, packing, or delivering meals to families across Vrygrond. No experience needed — just a willing heart.', 'rcgen-theme' ); ?></p>
      </div>

      <div class="service-card service-card--foundation fade-in fade-in-delay-3">
        <span class="service-icon">&#x1F4E3;</span>
        <h4><?php esc_html_e( 'Spread the Word', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Share our work with your network. Tell your church, workplace, or community about RCGEN Foundation. Awareness leads to support.', 'rcgen-theme' ); ?></p>
      </div>

    </div>
  </div>
</section>

<!-- ═══ DONATION INFO ════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container" style="max-width:720px;">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Donate', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'How to Donate', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="callout-box fade-in" style="background:#fff;border-left-color:var(--color-foundation);">
      <p>
        <strong><?php esc_html_e( 'EFT / Bank Transfer:', 'rcgen-theme' ); ?></strong><br>
        <?php esc_html_e( 'Account Name: RCGEN Foundation', 'rcgen-theme' ); ?><br>
        <?php esc_html_e( 'Bank: Please contact us for banking details', 'rcgen-theme' ); ?>
      </p>
    </div>
    <div class="callout-box green fade-in">
      <p>
        <strong><?php esc_html_e( 'SnapScan:', 'rcgen-theme' ); ?></strong>
        <?php esc_html_e( ' We accept SnapScan donations for quick and easy mobile payments. Contact us for our SnapScan QR code.', 'rcgen-theme' ); ?>
      </p>
    </div>
    <div class="callout-box fade-in">
      <p>
        <strong><?php esc_html_e( 'Food Donations:', 'rcgen-theme' ); ?></strong>
        <?php esc_html_e( ' Contact us to arrange a food donation drop-off at our Vrygrond location. We accept maize meal, rice, cooking oil, canned goods, and other dry staples.', 'rcgen-theme' ); ?>
      </p>
    </div>
    <div class="text-center" style="margin-top:32px;">
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">
        &#x2764; <?php esc_html_e( 'Contact Us to Donate or Volunteer', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</section>

<!-- ═══ CTA ══════════════════════════════════════════════════════════════════ -->
<div class="page-cta-band" style="background:linear-gradient(135deg,#14532d,#16a34a);">
  <div class="container">
    <h2><?php esc_html_e( 'Together, We Can End Hunger in Vrygrond', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'One donation. One volunteer. One meal. It all adds up to real change for real families in Vrygrond, Cape Town.', 'rcgen-theme' ); ?></p>
    <div class="page-cta-actions">
      <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-primary">
        &#x1F37D; <?php esc_html_e( 'Donate Now', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline">
        &#x1F91D; <?php esc_html_e( 'Volunteer With Us', 'rcgen-theme' ); ?>
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
