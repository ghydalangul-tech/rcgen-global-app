<?php
/**
 * Homepage Template — front-page.php
 *
 * Replaces all Lorem Ipsum placeholders, fake NYC addresses, and blog sidebar.
 * Contains: Hero → About Strip → 4 Organisations → Impact Stats → Events → Blog → Donate CTA → Contact
 *
 * @package rcgen-theme
 */

get_header();

$hero_headline = get_theme_mod(
	'hero_headline',
	'Building Hope. Transforming Lives. Empowering Communities.'
);
$hero_subtext = get_theme_mod(
	'hero_subtext',
	'Serving the Vrygrond community through faith, education, and care.'
);
?>

<!-- ═══════════════════════ HERO ═══════════════════════════════════════════════ -->
<section id="hero" aria-labelledby="hero-heading">
  <div class="hero-content">
    <div class="hero-badge" aria-hidden="true">&#x1F54A; <?php esc_html_e( 'Faith · Education · Care · Community', 'rcgen-theme' ); ?></div>
    <h1 id="hero-heading">
      <?php
      // Split headline on periods for styled emphasis on last word of each phrase
      $parts = array_map( 'trim', explode( '.', rtrim( esc_html( $hero_headline ), '.' ) ) );
      $last  = count( $parts ) - 1;
      foreach ( $parts as $i => $part ) {
        if ( empty( $part ) ) continue;
        if ( $i === $last ) {
          // Last phrase gets gold highlight on last word
          $words = explode( ' ', $part );
          $lw    = array_pop( $words );
          echo implode( ' ', $words ) . ( $words ? ' ' : '' );
          echo '<span class="text-gold">' . esc_html( $lw ) . '</span>';
        } else {
          echo esc_html( $part ) . '.<br>';
        }
      }
      ?>
    </h1>
    <p><?php echo esc_html( $hero_subtext ); ?></p>
    <div class="hero-ctas">
      <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-primary">
        &#x2764;&nbsp;<?php esc_html_e( 'Donate Now', 'rcgen-theme' ); ?>
      </a>
      <a href="#organisations" class="btn btn-outline">
        <?php esc_html_e( 'Our Programs', 'rcgen-theme' ); ?>&nbsp;&#x2193;
      </a>
    </div>
  </div>

  <div class="hero-scroll" aria-hidden="true">
    <div class="scroll-dot"></div>
    <span><?php esc_html_e( 'Scroll', 'rcgen-theme' ); ?></span>
  </div>
</section>
<!-- ═══════════════════════ END HERO ══════════════════════════════════════════ -->


<!-- ═══════════════════════ ABOUT STRIP ═══════════════════════════════════════ -->
<section id="about-strip" aria-label="<?php esc_attr_e( 'Quick stats', 'rcgen-theme' ); ?>">
  <div class="container">
    <div class="about-strip-inner">
      <div class="about-strip-text">
        <h3><?php esc_html_e( 'A Community Rooted in Faith &amp; Service', 'rcgen-theme' ); ?></h3>
        <p><?php esc_html_e( 'RCGEN is an umbrella nonprofit bringing together four distinct programs under one God-led vision — transforming lives in Vrygrond and beyond.', 'rcgen-theme' ); ?></p>
      </div>
      <div class="about-strip-stats" role="list">
        <div class="strip-stat" role="listitem">
          <span class="num" aria-label="500 plus children served">500+</span>
          <span class="lbl"><?php esc_html_e( 'Children Served', 'rcgen-theme' ); ?></span>
        </div>
        <div class="strip-stat" role="listitem">
          <span class="num" aria-label="4 programs">4</span>
          <span class="lbl"><?php esc_html_e( 'Programs', 'rcgen-theme' ); ?></span>
        </div>
        <div class="strip-stat" role="listitem">
          <span class="num" aria-label="10 plus years">10+</span>
          <span class="lbl"><?php esc_html_e( 'Years Active', 'rcgen-theme' ); ?></span>
        </div>
        <div class="strip-stat" role="listitem">
          <span class="num" aria-label="hundreds of meals weekly">100s</span>
          <span class="lbl"><?php esc_html_e( 'Meals Weekly', 'rcgen-theme' ); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ═══════════════════════ END ABOUT STRIP ═══════════════════════════════════ -->


<!-- ═══════════════════════ 4 ORGANISATIONS ═══════════════════════════════════ -->
<section id="organisations" class="section" aria-labelledby="orgs-heading">
  <div class="container">

    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Under One Umbrella', 'rcgen-theme' ); ?></span>
      <h2 id="orgs-heading"><?php esc_html_e( 'Our Four Organisations', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'Each program has a distinct identity, serving a specific need in the Vrygrond community — united by the same heart and mission.', 'rcgen-theme' ); ?></p>
    </div>

    <div class="org-grid">

      <!-- 1. RCGEN (Church) -->
      <article class="org-card org-card--church fade-in" aria-labelledby="org-church-title">
        <div class="org-card-header">
          <span class="org-icon" aria-hidden="true">&#x1F54A;&#xFE0F;</span>
          <span class="org-tag"><?php esc_html_e( 'Church &amp; Faith Outreach', 'rcgen-theme' ); ?></span>
          <h3 id="org-church-title"><?php esc_html_e( 'RCGEN', 'rcgen-theme' ); ?></h3>
        </div>
        <div class="org-card-body">
          <p><?php esc_html_e( 'A spirit-led church serving the Vrygrond community through worship, pastoral care, and outreach.', 'rcgen-theme' ); ?></p>
          <ul class="org-card-features" aria-label="<?php esc_attr_e( 'RCGEN Church programs', 'rcgen-theme' ); ?>">
            <li><?php esc_html_e( 'Weekly worship services', 'rcgen-theme' ); ?></li>
            <li><?php esc_html_e( 'Pastoral care &amp; discipleship', 'rcgen-theme' ); ?></li>
            <li><?php esc_html_e( 'Youth &amp; family outreach', 'rcgen-theme' ); ?></li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/organisations/rcgen' ) ); ?>" class="org-link">
            <?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?>
          </a>
        </div>
      </article>

      <!-- 2. RCGEN Group -->
      <article class="org-card org-card--group fade-in fade-in-delay-1" aria-labelledby="org-group-title">
        <div class="org-card-header">
          <span class="org-icon" aria-hidden="true">&#x1F91D;</span>
          <span class="org-tag"><?php esc_html_e( 'Community Welfare &amp; Humanitarian Aid', 'rcgen-theme' ); ?></span>
          <h3 id="org-group-title"><?php esc_html_e( 'RCGEN Group', 'rcgen-theme' ); ?></h3>
        </div>
        <div class="org-card-body">
          <p><?php esc_html_e( 'Providing humanitarian aid, elderly support, crisis intervention, and community upliftment across Vrygrond and surrounds.', 'rcgen-theme' ); ?></p>
          <ul class="org-card-features" aria-label="<?php esc_attr_e( 'RCGEN Group programs', 'rcgen-theme' ); ?>">
            <li><?php esc_html_e( 'Emergency food &amp; clothing aid', 'rcgen-theme' ); ?></li>
            <li><?php esc_html_e( 'Elderly care &amp; home visits', 'rcgen-theme' ); ?></li>
            <li><?php esc_html_e( 'Crisis counselling &amp; referrals', 'rcgen-theme' ); ?></li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/organisations/rcgen-group' ) ); ?>" class="org-link">
            <?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?>
          </a>
        </div>
      </article>

      <!-- 3. RCGEN Educare -->
      <article class="org-card org-card--educare fade-in fade-in-delay-2" aria-labelledby="org-educare-title">
        <div class="org-card-header">
          <span class="org-icon" aria-hidden="true">&#x1F393;</span>
          <span class="org-tag"><?php esc_html_e( 'Early Childhood Education', 'rcgen-theme' ); ?></span>
          <h3 id="org-educare-title"><?php esc_html_e( 'RCGEN Educare', 'rcgen-theme' ); ?></h3>
        </div>
        <div class="org-card-body">
          <p><?php esc_html_e( 'Quality crèche and ECD centre preparing children ages 0–6 for school and life. We believe every child deserves a strong foundation built on love and learning.', 'rcgen-theme' ); ?></p>
          <ul class="org-card-features" aria-label="<?php esc_attr_e( 'Educare programs', 'rcgen-theme' ); ?>">
            <li><?php esc_html_e( 'Registered crèche for ages 0–6', 'rcgen-theme' ); ?></li>
            <li><?php esc_html_e( 'CAPS-aligned ECD curriculum', 'rcgen-theme' ); ?></li>
            <li><?php esc_html_e( 'School-readiness &amp; parent support', 'rcgen-theme' ); ?></li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/organisations/rcgen-educare' ) ); ?>" class="org-link">
            <?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?>
          </a>
        </div>
      </article>

      <!-- 4. RCGEN Foundation -->
      <article class="org-card org-card--foundation fade-in fade-in-delay-3" aria-labelledby="org-foundation-title">
        <div class="org-card-header">
          <span class="org-icon" aria-hidden="true">&#x1F37D;&#xFE0F;</span>
          <span class="org-tag"><?php esc_html_e( 'Feeding Scheme &amp; Nutrition', 'rcgen-theme' ); ?></span>
          <h3 id="org-foundation-title"><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></h3>
        </div>
        <div class="org-card-body">
          <p><?php esc_html_e( 'Providing nutritious meals and food support to children and families in Vrygrond weekly.', 'rcgen-theme' ); ?></p>
          <ul class="org-card-features" aria-label="<?php esc_attr_e( 'RCGEN Foundation programs', 'rcgen-theme' ); ?>">
            <li><?php esc_html_e( 'Weekly hot meals distribution', 'rcgen-theme' ); ?></li>
            <li><?php esc_html_e( 'Nutrition education for families', 'rcgen-theme' ); ?></li>
            <li><?php esc_html_e( 'Food parcel drives &amp; donations', 'rcgen-theme' ); ?></li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/organisations/rcgen-foundation' ) ); ?>" class="org-link">
            <?php esc_html_e( 'Learn more', 'rcgen-theme' ); ?>
          </a>
        </div>
      </article>

    </div><!-- .org-grid -->
  </div><!-- .container -->
</section>
<!-- ═══════════════════════ END 4 ORGANISATIONS ════════════════════════════════ -->


<!-- ═══════════════════════ IMPACT STATS ══════════════════════════════════════ -->
<section id="impact" aria-labelledby="impact-heading">
  <div class="container">

    <div class="section-header fade-in">
      <span class="section-tag" style="color:var(--color-gold);">
        <?php esc_html_e( 'Our Impact', 'rcgen-theme' ); ?>
      </span>
      <h2 id="impact-heading"><?php esc_html_e( 'Making a Real Difference', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'Every number represents a life touched, a family supported, a child given hope. Here\'s what God has done through RCGEN.', 'rcgen-theme' ); ?></p>
    </div>

    <div class="stats-grid" role="list">

      <div class="stat-card fade-in" role="listitem">
        <span class="stat-icon" aria-hidden="true">&#x1F9D2;</span>
        <div class="stat-number" data-target="500" data-suffix="+">0</div>
        <div class="stat-label"><?php esc_html_e( 'Children Served', 'rcgen-theme' ); ?></div>
      </div>

      <div class="stat-card fade-in fade-in-delay-1" role="listitem">
        <span class="stat-icon" aria-hidden="true">&#x1F4CA;</span>
        <div class="stat-number" data-target="4" data-suffix="">0</div>
        <div class="stat-label"><?php esc_html_e( 'Community Programs', 'rcgen-theme' ); ?></div>
      </div>

      <div class="stat-card fade-in fade-in-delay-2" role="listitem">
        <span class="stat-icon" aria-hidden="true">&#x1F4C5;</span>
        <div class="stat-number" data-target="10" data-suffix="+">0</div>
        <div class="stat-label"><?php esc_html_e( 'Years of Impact', 'rcgen-theme' ); ?></div>
      </div>

      <div class="stat-card fade-in fade-in-delay-3" role="listitem">
        <span class="stat-icon" aria-hidden="true">&#x1F35C;</span>
        <div class="stat-number" data-target="100" data-suffix="s">0</div>
        <div class="stat-label"><?php esc_html_e( 'Meals Weekly', 'rcgen-theme' ); ?></div>
      </div>

    </div><!-- .stats-grid -->
  </div><!-- .container -->
</section>
<!-- ═══════════════════════ END IMPACT STATS ══════════════════════════════════ -->


<!-- ═══════════════════════ UPCOMING EVENTS ═══════════════════════════════════ -->
<section id="events" class="section" aria-labelledby="events-heading">
  <div class="container">

    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'What\'s On', 'rcgen-theme' ); ?></span>
      <h2 id="events-heading"><?php esc_html_e( 'Upcoming Events', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'Join us in Vrygrond — services, outreach days, food drives, and community gatherings.', 'rcgen-theme' ); ?></p>
    </div>

    <?php
    $events_query = rcgen_get_upcoming_events( 3 );
    if ( $events_query->have_posts() ) :
    ?>
    <div class="events-grid">
      <?php while ( $events_query->have_posts() ) : $events_query->the_post();
        $event_date     = get_post_meta( get_the_ID(), '_event_date',     true );
        $event_time     = get_post_meta( get_the_ID(), '_event_time',     true );
        // Always use Vrygrond location; fall back to meta or default
        $event_location = get_post_meta( get_the_ID(), '_event_location', true );
        if ( empty( $event_location ) || stripos( $event_location, 'new york' ) !== false || stripos( $event_location, 'vabu' ) !== false ) {
          $event_location = __( 'Vrygrond Community Centre, Cape Town', 'rcgen-theme' );
        }
        $day   = $event_date ? date( 'd',   strtotime( $event_date ) ) : '';
        $month = $event_date ? date( 'M',   strtotime( $event_date ) ) : '';
      ?>
      <article class="event-card fade-in">
        <div class="event-date-badge">
          <?php if ( $event_date ) : ?>
          <div class="date-block" aria-label="<?php echo esc_attr( $day . ' ' . $month ); ?>">
            <span class="day"><?php echo esc_html( $day ); ?></span>
            <span class="month"><?php echo esc_html( $month ); ?></span>
          </div>
          <?php endif; ?>
          <span class="event-time">
            <?php echo $event_time ? esc_html( date( 'g:i A', strtotime( $event_time ) ) ) : ''; ?>
          </span>
        </div>
        <div class="event-body">
          <h4><?php the_title(); ?></h4>
          <p class="event-location"><?php echo esc_html( $event_location ); ?></p>
          <?php if ( has_excerpt() ) : ?>
          <p><?php the_excerpt(); ?></p>
          <?php endif; ?>
          <a href="<?php the_permalink(); ?>" class="read-more">
            <?php esc_html_e( 'Event Details', 'rcgen-theme' ); ?>
          </a>
        </div>
      </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <?php else : // Fallback hardcoded events if no CPT events exist yet ?>
    <div class="events-grid">

      <article class="event-card fade-in">
        <div class="event-date-badge">
          <div class="date-block">
            <span class="day">15</span>
            <span class="month">Mar</span>
          </div>
          <span class="event-time">09:00 AM</span>
        </div>
        <div class="event-body">
          <h4><?php esc_html_e( 'Sunday Worship Service', 'rcgen-theme' ); ?></h4>
          <p class="event-location"><?php esc_html_e( 'Vrygrond Community Centre, Cape Town', 'rcgen-theme' ); ?></p>
          <p><?php esc_html_e( 'Join us for our weekly worship service. All are welcome — come as you are.', 'rcgen-theme' ); ?></p>
        </div>
      </article>

      <article class="event-card fade-in fade-in-delay-1">
        <div class="event-date-badge">
          <div class="date-block">
            <span class="day">22</span>
            <span class="month">Mar</span>
          </div>
          <span class="event-time">10:00 AM</span>
        </div>
        <div class="event-body">
          <h4><?php esc_html_e( 'Community Food Drive', 'rcgen-theme' ); ?></h4>
          <p class="event-location"><?php esc_html_e( 'Vrygrond Community Centre, Cape Town', 'rcgen-theme' ); ?></p>
          <p><?php esc_html_e( 'Monthly food parcel distribution for families in need. Volunteers welcome.', 'rcgen-theme' ); ?></p>
        </div>
      </article>

      <article class="event-card fade-in fade-in-delay-2">
        <div class="event-date-badge">
          <div class="date-block">
            <span class="day">05</span>
            <span class="month">Apr</span>
          </div>
          <span class="event-time">08:00 AM</span>
        </div>
        <div class="event-body">
          <h4><?php esc_html_e( 'RCGEN Educare Open Day', 'rcgen-theme' ); ?></h4>
          <p class="event-location"><?php esc_html_e( 'RCGEN Educare Centre, Vrygrond, Cape Town', 'rcgen-theme' ); ?></p>
          <p><?php esc_html_e( 'Enrolment open day for children ages 0–6. Meet our teachers and see the facilities.', 'rcgen-theme' ); ?></p>
        </div>
      </article>

    </div>
    <?php endif; ?>

    <div class="text-center" style="margin-top:40px;">
      <a href="<?php echo esc_url( home_url( '/events' ) ); ?>" class="btn btn-navy">
        <?php esc_html_e( 'View All Events', 'rcgen-theme' ); ?>
      </a>
    </div>

  </div><!-- .container -->
</section>
<!-- ═══════════════════════ END EVENTS ════════════════════════════════════════ -->


<!-- ═══════════════════════ BLOG / NEWS ═══════════════════════════════════════ -->
<section id="blog" class="section" aria-labelledby="blog-heading">
  <div class="container">

    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Latest News', 'rcgen-theme' ); ?></span>
      <h2 id="blog-heading"><?php esc_html_e( 'Stories &amp; Updates', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'Real stories from the Vrygrond community — transformation, hope, and the ongoing work of RCGEN.', 'rcgen-theme' ); ?></p>
    </div>

    <?php
    $blog_query = new WP_Query( array(
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'post_status'    => 'publish',
    ) );

    if ( $blog_query->have_posts() ) :
    ?>
    <div class="blog-grid">
      <?php while ( $blog_query->have_posts() ) : $blog_query->the_post();
        $cats = get_the_terms( get_the_ID(), 'category' );
        $cat_name = ( $cats && ! is_wp_error( $cats ) ) ? $cats[0]->name : __( 'News', 'rcgen-theme' );
      ?>
      <article class="blog-card fade-in" <?php post_class(); ?>>
        <div class="blog-card-img">
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
              <?php the_post_thumbnail( 'rcgen-blog', array( 'alt' => '' ) ); ?>
            </a>
          <?php else : ?>
            <div style="height:100%;background:linear-gradient(135deg,var(--color-navy),var(--color-navy-dark));"></div>
          <?php endif; ?>
          <span class="blog-cat"><?php echo esc_html( $cat_name ); ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-meta">
            <span>&#x1F4C5; <?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
            <span>&#x270D; <?php the_author(); ?></span>
          </div>
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read more', 'rcgen-theme' ); ?></a>
        </div>
      </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <?php else : // Fallback static blog cards ?>
    <div class="blog-grid">

      <article class="blog-card fade-in">
        <div class="blog-card-img">
          <div style="height:100%;background:linear-gradient(135deg,#0f2d6b,#1a56db);"></div>
          <span class="blog-cat"><?php esc_html_e( 'RCGEN Church', 'rcgen-theme' ); ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-meta">
            <span>&#x1F4C5; <?php echo esc_html( date( 'j F Y', strtotime( '-14 days' ) ) ); ?></span>
          </div>
          <h4><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'RCGEN Sunday Services Return to Full Capacity', 'rcgen-theme' ); ?></a></h4>
          <p><?php esc_html_e( 'Our weekly worship gatherings in Vrygrond are thriving — more families joining every week as the community comes together in faith and worship.', 'rcgen-theme' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="read-more"><?php esc_html_e( 'Read more', 'rcgen-theme' ); ?></a>
        </div>
      </article>

      <article class="blog-card fade-in fade-in-delay-1">
        <div class="blog-card-img">
          <div style="height:100%;background:linear-gradient(135deg,#16a34a,#0284c7);"></div>
          <span class="blog-cat"><?php esc_html_e( 'RCGEN Foundation', 'rcgen-theme' ); ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-meta">
            <span>&#x1F4C5; <?php echo esc_html( date( 'j F Y', strtotime( '-7 days' ) ) ); ?></span>
          </div>
          <h4><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Over 200 Meals Served at February Food Drive', 'rcgen-theme' ); ?></a></h4>
          <p><?php esc_html_e( 'Thanks to generous donors and volunteers, we served over 200 warm meals to families across Vrygrond last Saturday.', 'rcgen-theme' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="read-more"><?php esc_html_e( 'Read more', 'rcgen-theme' ); ?></a>
        </div>
      </article>

      <article class="blog-card fade-in fade-in-delay-2">
        <div class="blog-card-img">
          <div style="height:100%;background:linear-gradient(135deg,#0284c7,#0ea5e9);"></div>
          <span class="blog-cat"><?php esc_html_e( 'Educare', 'rcgen-theme' ); ?></span>
        </div>
        <div class="blog-card-body">
          <div class="blog-meta">
            <span>&#x1F4C5; <?php echo esc_html( date( 'j F Y', strtotime( '-3 days' ) ) ); ?></span>
          </div>
          <h4><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'New Classroom Opens at RCGEN Educare Centre', 'rcgen-theme' ); ?></a></h4>
          <p><?php esc_html_e( 'We have expanded our crèche facilities to accommodate more children — 15 new learners enrolled for the 2026 academic year.', 'rcgen-theme' ); ?></p>
          <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="read-more"><?php esc_html_e( 'Read more', 'rcgen-theme' ); ?></a>
        </div>
      </article>

    </div>
    <?php endif; ?>

    <div class="text-center" style="margin-top:40px;">
      <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-navy">
        <?php esc_html_e( 'Read All Stories', 'rcgen-theme' ); ?>
      </a>
    </div>

  </div><!-- .container -->
</section>
<!-- ═══════════════════════ END BLOG ══════════════════════════════════════════ -->


<!-- ═══════════════════════ DONATE CTA BANNER ═════════════════════════════════ -->
<section id="donate-cta" aria-labelledby="donate-heading">
  <div class="container">
    <span class="section-tag"><?php esc_html_e( 'Make a Difference', 'rcgen-theme' ); ?></span>
    <h2 id="donate-heading"><?php esc_html_e( 'Your Gift Changes Lives in Vrygrond', 'rcgen-theme' ); ?></h2>
    <p><?php esc_html_e( 'Every rand you give goes directly to feeding children, educating learners, and supporting families in need. Give today — and join the mission.', 'rcgen-theme' ); ?></p>
    <div class="donate-cta-actions">
      <a href="<?php echo esc_url( home_url( '/donate' ) ); ?>" class="btn btn-primary">
        &#x2764;&nbsp;<?php esc_html_e( 'Donate Now', 'rcgen-theme' ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/volunteer' ) ); ?>" class="btn btn-outline">
        <?php esc_html_e( 'Volunteer With Us', 'rcgen-theme' ); ?>
      </a>
    </div>
    <p class="snapscan-note">
      <?php esc_html_e( 'Secure payments via EFT · SnapScan · Credit/Debit Card. Registered NPO.', 'rcgen-theme' ); ?>
    </p>
  </div>
</section>
<!-- ═══════════════════════ END DONATE CTA ════════════════════════════════════ -->


<!-- ═══════════════════════ CONTACT ═══════════════════════════════════════════ -->
<section id="contact" class="section" aria-labelledby="contact-heading">
  <div class="container">

    <div class="section-header fade-in">
      <span class="section-tag"><?php esc_html_e( 'Get In Touch', 'rcgen-theme' ); ?></span>
      <h2 id="contact-heading"><?php esc_html_e( 'Contact RCGEN', 'rcgen-theme' ); ?></h2>
      <p><?php esc_html_e( 'Want to partner, volunteer, or find out more? We\'d love to hear from you.', 'rcgen-theme' ); ?></p>
    </div>

    <div class="contact-grid">

      <!-- Contact Info -->
      <div class="contact-info fade-in">
        <h3><?php esc_html_e( 'Find Us in Vrygrond', 'rcgen-theme' ); ?></h3>
        <p><?php esc_html_e( 'We are based in the heart of Vrygrond, Cape Town. Come visit us, or reach out any time.', 'rcgen-theme' ); ?></p>

        <div class="contact-details">

          <div class="contact-item">
            <div class="contact-item-icon" aria-hidden="true">&#x1F4CD;</div>
            <div class="contact-item-text">
              <div class="label"><?php esc_html_e( 'Location', 'rcgen-theme' ); ?></div>
              <div class="value"><?php esc_html_e( 'Vrygrond, Cape Town, South Africa', 'rcgen-theme' ); ?></div>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon" aria-hidden="true">&#x1F310;</div>
            <div class="contact-item-text">
              <div class="label"><?php esc_html_e( 'Website', 'rcgen-theme' ); ?></div>
              <div class="value"><a href="https://rcgen.org.za">rcgen.org.za</a></div>
            </div>
          </div>

          <?php $email = get_theme_mod( 'contact_email', 'info@rcgen.org.za' ); if ( $email ) : ?>
          <div class="contact-item">
            <div class="contact-item-icon" aria-hidden="true">&#x2709;</div>
            <div class="contact-item-text">
              <div class="label"><?php esc_html_e( 'Email', 'rcgen-theme' ); ?></div>
              <div class="value"><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></div>
            </div>
          </div>
          <?php endif; ?>

          <?php $phone = get_theme_mod( 'contact_phone', '' ); if ( $phone ) : ?>
          <div class="contact-item">
            <div class="contact-item-icon" aria-hidden="true">&#x1F4DE;</div>
            <div class="contact-item-text">
              <div class="label"><?php esc_html_e( 'Phone', 'rcgen-theme' ); ?></div>
              <div class="value"><a href="tel:<?php echo esc_attr( preg_replace( '/\s/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a></div>
            </div>
          </div>
          <?php endif; ?>

        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form fade-in fade-in-delay-1">
        <form id="rcgen-contact-form" novalidate aria-label="<?php esc_attr_e( 'Contact form', 'rcgen-theme' ); ?>">
          <?php wp_nonce_field( 'rcgen-nonce', 'nonce' ); ?>
          <div class="form-row">
            <div class="form-group">
              <label for="cf-name"><?php esc_html_e( 'Your Name', 'rcgen-theme' ); ?> *</label>
              <input type="text" id="cf-name" name="name" required autocomplete="name" placeholder="<?php esc_attr_e( 'e.g. Jane Smith', 'rcgen-theme' ); ?>">
            </div>
            <div class="form-group">
              <label for="cf-email"><?php esc_html_e( 'Email Address', 'rcgen-theme' ); ?> *</label>
              <input type="email" id="cf-email" name="email" required autocomplete="email" placeholder="<?php esc_attr_e( 'you@example.com', 'rcgen-theme' ); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="cf-subject"><?php esc_html_e( 'Subject', 'rcgen-theme' ); ?></label>
            <select id="cf-subject" name="subject">
              <option value=""><?php esc_html_e( 'Select a subject…', 'rcgen-theme' ); ?></option>
              <option value="General Enquiry"><?php esc_html_e( 'General Enquiry', 'rcgen-theme' ); ?></option>
              <option value="Donate"><?php esc_html_e( 'I Want to Donate', 'rcgen-theme' ); ?></option>
              <option value="Volunteer"><?php esc_html_e( 'I Want to Volunteer', 'rcgen-theme' ); ?></option>
              <option value="Educare"><?php esc_html_e( 'RCGEN Educare Enquiry', 'rcgen-theme' ); ?></option>
              <option value="RCGEN Foundation"><?php esc_html_e( 'RCGEN Foundation (Feeding Scheme)', 'rcgen-theme' ); ?></option>
              <option value="RCGEN Group"><?php esc_html_e( 'RCGEN Group (Community Welfare)', 'rcgen-theme' ); ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="cf-message"><?php esc_html_e( 'Message', 'rcgen-theme' ); ?> *</label>
            <textarea id="cf-message" name="message" required rows="5" placeholder="<?php esc_attr_e( 'How can we help you?', 'rcgen-theme' ); ?>"></textarea>
          </div>
          <div id="cf-status" role="alert" aria-live="polite" style="margin-bottom:12px;display:none;"></div>
          <button type="submit" class="btn btn-primary" id="cf-submit">
            <?php esc_html_e( 'Send Message', 'rcgen-theme' ); ?>
          </button>
        </form>
      </div>

    </div><!-- .contact-grid -->
  </div><!-- .container -->
</section>
<!-- ═══════════════════════ END CONTACT ═══════════════════════════════════════ -->

<?php get_footer(); ?>
