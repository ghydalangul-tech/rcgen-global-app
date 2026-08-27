<?php
/**
 * Template Name: Community Survey Page
 * Slug: survey  →  rcgen.org.za/survey/
 *
 * @package rcgen-theme
 */

get_header();
?>

<!-- ═══ PAGE HERO ═══════════════════════════════════════════════════════════ -->
<div class="page-hero">
  <div class="container">
    <span class="section-tag" style="color:var(--color-gold);display:block;margin-bottom:10px;">
      &#x1F4CB; <?php esc_html_e( 'Your Voice Matters', 'rcgen-theme' ); ?>
    </span>
    <h1><?php esc_html_e( 'Community Survey', 'rcgen-theme' ); ?></h1>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'Survey', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<!-- ═══ INTRO ════════════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue" style="padding-bottom:0;">
  <div class="container" style="max-width:760px;text-align:center;">
    <h2><?php esc_html_e( 'Help Us Serve Vrygrond Better', 'rcgen-theme' ); ?></h2>
    <p style="font-size:1.05rem;color:var(--color-gray);margin-bottom:0;">
      <?php esc_html_e( 'We want to hear from the Vrygrond community. Your feedback helps RCGEN understand the real needs around us — so we can serve you and your family better. This survey takes less than 3 minutes.', 'rcgen-theme' ); ?>
    </p>
  </div>
</section>

<!-- ═══ SURVEY FORM ══════════════════════════════════════════════════════════ -->
<section class="page-section page-section--blue">
  <div class="container">

    <!-- Success message (hidden by default) -->
    <div class="survey-success" id="survey-success">
      <span class="success-icon">&#x2705;</span>
      <h3><?php esc_html_e( 'Thank You for Your Response!', 'rcgen-theme' ); ?></h3>
      <p><?php esc_html_e( 'Your feedback has been received. RCGEN values every voice in the Vrygrond community. We will use your input to improve our programs and better serve those around us.', 'rcgen-theme' ); ?></p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-navy" style="margin-top:16px;">
        <?php esc_html_e( 'Back to Home', 'rcgen-theme' ); ?>
      </a>
    </div>

    <!-- The form -->
    <form class="survey-form" id="rcgen-survey-form" novalidate aria-label="<?php esc_attr_e( 'Community Survey', 'rcgen-theme' ); ?>">
      <?php wp_nonce_field( 'rcgen-nonce', 'nonce' ); ?>

      <div class="form-group">
        <label for="sf-name"><?php esc_html_e( 'Full Name', 'rcgen-theme' ); ?> *</label>
        <input type="text" id="sf-name" name="survey_name" required autocomplete="name"
               placeholder="<?php esc_attr_e( 'e.g. Thandi Mokoena', 'rcgen-theme' ); ?>">
      </div>

      <div class="form-group">
        <label for="sf-area"><?php esc_html_e( 'Area / Neighbourhood', 'rcgen-theme' ); ?> *</label>
        <input type="text" id="sf-area" name="survey_area" required
               placeholder="<?php esc_attr_e( 'e.g. Vrygrond, Lavender Hill, Muizenberg...', 'rcgen-theme' ); ?>">
      </div>

      <div class="form-group">
        <label for="sf-service"><?php esc_html_e( 'Which RCGEN service do you use or know about?', 'rcgen-theme' ); ?></label>
        <select id="sf-service" name="survey_service">
          <option value=""><?php esc_html_e( 'Select one…', 'rcgen-theme' ); ?></option>
          <option value="RCGEN Church"><?php esc_html_e( 'RCGEN — Church &amp; Faith Outreach', 'rcgen-theme' ); ?></option>
          <option value="RCGEN Educare"><?php esc_html_e( 'RCGEN Educare — Crèche &amp; ECD Centre', 'rcgen-theme' ); ?></option>
          <option value="RCGEN Foundation"><?php esc_html_e( 'RCGEN Foundation — Feeding Scheme', 'rcgen-theme' ); ?></option>
          <option value="RCGEN Group"><?php esc_html_e( 'RCGEN Group — Community Welfare &amp; Aid', 'rcgen-theme' ); ?></option>
          <option value="Multiple"><?php esc_html_e( 'I use / know more than one', 'rcgen-theme' ); ?></option>
          <option value="None yet"><?php esc_html_e( 'None yet — I am new to RCGEN', 'rcgen-theme' ); ?></option>
        </select>
      </div>

      <div class="form-group">
        <label for="sf-heard"><?php esc_html_e( 'How did you hear about RCGEN?', 'rcgen-theme' ); ?></label>
        <select id="sf-heard" name="survey_heard">
          <option value=""><?php esc_html_e( 'Select one…', 'rcgen-theme' ); ?></option>
          <option value="Word of mouth"><?php esc_html_e( 'Word of mouth / friend or family', 'rcgen-theme' ); ?></option>
          <option value="Social media"><?php esc_html_e( 'Social media (Facebook, Instagram, etc.)', 'rcgen-theme' ); ?></option>
          <option value="Website"><?php esc_html_e( 'Website — rcgen.org.za', 'rcgen-theme' ); ?></option>
          <option value="Church visit"><?php esc_html_e( 'Visited the church', 'rcgen-theme' ); ?></option>
          <option value="Community event"><?php esc_html_e( 'Community event or food drive', 'rcgen-theme' ); ?></option>
          <option value="Flyer or poster"><?php esc_html_e( 'Flyer or poster', 'rcgen-theme' ); ?></option>
          <option value="I live in Vrygrond"><?php esc_html_e( 'I live in Vrygrond', 'rcgen-theme' ); ?></option>
        </select>
      </div>

      <div class="form-group">
        <label for="sf-feedback"><?php esc_html_e( 'How can RCGEN serve you or your community better?', 'rcgen-theme' ); ?></label>
        <textarea id="sf-feedback" name="survey_feedback" rows="5"
                  placeholder="<?php esc_attr_e( 'Share any ideas, needs, or suggestions you have for RCGEN…', 'rcgen-theme' ); ?>"></textarea>
      </div>

      <div class="form-group">
        <label><?php esc_html_e( 'Would you like to volunteer with RCGEN?', 'rcgen-theme' ); ?></label>
        <div class="radio-group">
          <label>
            <input type="radio" name="survey_volunteer" value="Yes">
            <?php esc_html_e( 'Yes, I am interested', 'rcgen-theme' ); ?>
          </label>
          <label>
            <input type="radio" name="survey_volunteer" value="Maybe">
            <?php esc_html_e( 'Maybe, tell me more', 'rcgen-theme' ); ?>
          </label>
          <label>
            <input type="radio" name="survey_volunteer" value="No">
            <?php esc_html_e( 'No, not at this time', 'rcgen-theme' ); ?>
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="sf-email">
          <?php esc_html_e( 'Email Address', 'rcgen-theme' ); ?>
          <span style="font-weight:400;color:var(--color-gray);text-transform:none;letter-spacing:0;font-size:0.82rem;">
            (<?php esc_html_e( 'optional — only if you\'d like us to follow up', 'rcgen-theme' ); ?>)
          </span>
        </label>
        <input type="email" id="sf-email" name="survey_email" autocomplete="email"
               placeholder="<?php esc_attr_e( 'your@email.com', 'rcgen-theme' ); ?>">
      </div>

      <div id="sf-status" role="alert" aria-live="polite" style="margin-bottom:16px;display:none;"></div>

      <button type="submit" class="btn btn-primary" id="sf-submit" style="width:100%;justify-content:center;font-size:1rem;padding:16px;">
        &#x1F4CB; <?php esc_html_e( 'Submit My Survey Response', 'rcgen-theme' ); ?>
      </button>

      <p style="margin-top:16px;font-size:0.82rem;color:var(--color-gray);text-align:center;">
        <?php esc_html_e( 'Your responses are confidential and used only to improve RCGEN\'s programs in Vrygrond.', 'rcgen-theme' ); ?>
      </p>
    </form>

  </div>
</section>

<!-- ═══ WHY SURVEY ═══════════════════════════════════════════════════════════ -->
<section class="page-section page-section--white">
  <div class="container" style="max-width:860px;">
    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Community-Driven', 'rcgen-theme' ); ?></span>
      <h2><?php esc_html_e( 'Why Your Input Matters', 'rcgen-theme' ); ?></h2>
    </div>
    <div class="services-grid">
      <div class="service-card fade-in">
        <span class="service-icon">&#x1F4CA;</span>
        <h4><?php esc_html_e( 'Shape Our Programs', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'Your feedback directly influences how RCGEN designs and prioritises our services for the Vrygrond community.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="service-card fade-in fade-in-delay-1">
        <span class="service-icon">&#x1F91D;</span>
        <h4><?php esc_html_e( 'Connect to Support', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'If you share your contact details, we may reach out to connect you with the right RCGEN service or volunteer opportunity.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="service-card fade-in fade-in-delay-2">
        <span class="service-icon">&#x1F4AC;</span>
        <h4><?php esc_html_e( 'Be Heard', 'rcgen-theme' ); ?></h4>
        <p><?php esc_html_e( 'RCGEN exists to serve the Vrygrond community. Every voice counts — especially those we haven\'t yet reached.', 'rcgen-theme' ); ?></p>
      </div>
    </div>
  </div>
</section>

<script>
(function () {
  var form    = document.getElementById('rcgen-survey-form');
  var success = document.getElementById('survey-success');
  var status  = document.getElementById('sf-status');
  var btn     = document.getElementById('sf-submit');

  if (!form) return;

  function showStatus(msg, isError) {
    status.textContent = msg;
    status.style.display = 'block';
    status.style.padding = '12px 16px';
    status.style.borderRadius = '8px';
    status.style.fontWeight = '600';
    status.style.fontSize = '0.9rem';
    status.style.background = isError ? '#fef2f2' : '#f0fdf4';
    status.style.color = isError ? '#dc2626' : '#16a34a';
    status.style.border = '1px solid ' + (isError ? '#fca5a5' : '#86efac');
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    var name = form.querySelector('[name="survey_name"]').value.trim();
    var area = form.querySelector('[name="survey_area"]').value.trim();

    if (!name || !area) {
      showStatus('<?php echo esc_js( __( 'Please enter your name and area.', 'rcgen-theme' ) ); ?>', true);
      return;
    }

    btn.textContent = '<?php echo esc_js( __( 'Submitting…', 'rcgen-theme' ) ); ?>';
    btn.disabled = true;
    status.style.display = 'none';

    <?php if ( defined( 'ABSPATH' ) ) : ?>
    var fd = new FormData(form);
    fd.append('action', 'rcgen_survey');

    fetch('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', {
      method: 'POST',
      body: fd,
    })
      .then(function (r) { return r.json(); })
      .then(function (d) {
        if (d.success) {
          form.style.display = 'none';
          success.style.display = 'block';
        } else {
          showStatus(d.data.message || '<?php echo esc_js( __( 'Error. Please try again.', 'rcgen-theme' ) ); ?>', true);
          btn.textContent = '<?php echo esc_js( __( 'Submit My Survey Response', 'rcgen-theme' ) ); ?>';
          btn.disabled = false;
        }
      })
      .catch(function () {
        showStatus('<?php echo esc_js( __( 'Network error. Please try again.', 'rcgen-theme' ) ); ?>', true);
        btn.textContent = '<?php echo esc_js( __( 'Submit My Survey Response', 'rcgen-theme' ) ); ?>';
        btn.disabled = false;
      });
    <?php else : ?>
    /* Static preview fallback */
    setTimeout(function () {
      form.style.display = 'none';
      success.style.display = 'block';
    }, 1000);
    <?php endif; ?>
  });
})();
</script>

<?php get_footer(); ?>
