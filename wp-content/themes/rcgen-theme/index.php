<?php
/**
 * Blog index / archive fallback template.
 *
 * @package rcgen-theme
 */

get_header();
?>

<div class="page-hero">
  <div class="container">
    <h1><?php
      if ( is_home() && ! is_front_page() ) {
        single_post_title();
      } elseif ( is_archive() ) {
        the_archive_title();
      } else {
        esc_html_e( 'Blog &amp; News', 'rcgen-theme' );
      }
    ?></h1>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php esc_html_e( 'Blog', 'rcgen-theme' ); ?></span>
    </div>
  </div>
</div>

<section class="section" style="background:var(--color-light);">
  <div class="container">

    <?php if ( have_posts() ) : ?>
    <div class="blog-grid">
      <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class( 'blog-card' ); ?>>
        <div class="blog-card-img">
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
              <?php the_post_thumbnail( 'rcgen-blog', array( 'alt' => '' ) ); ?>
            </a>
          <?php else : ?>
            <div style="height:100%;background:linear-gradient(135deg,var(--color-navy),var(--color-navy-dark));"></div>
          <?php endif; ?>
          <?php
          $cats = get_the_terms( get_the_ID(), 'category' );
          if ( $cats && ! is_wp_error( $cats ) ) :
          ?>
          <span class="blog-cat"><?php echo esc_html( $cats[0]->name ); ?></span>
          <?php endif; ?>
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
      <?php endwhile; ?>
    </div>

    <div style="margin-top:48px; display:flex; justify-content:center; gap:12px;">
      <?php
      $prev = get_previous_posts_link( '&larr; ' . esc_html__( 'Newer Posts', 'rcgen-theme' ) );
      $next = get_next_posts_link( esc_html__( 'Older Posts', 'rcgen-theme' ) . ' &rarr;' );
      if ( $prev ) echo '<a class="btn btn-navy" style="font-size:.9rem;padding:10px 24px;">' . $prev . '</a>';
      if ( $next ) echo '<a class="btn btn-outline" style="font-size:.9rem;padding:10px 24px;color:var(--color-navy);border-color:var(--color-navy);">' . $next . '</a>';
      ?>
    </div>

    <?php else : ?>
    <div style="text-align:center;padding:80px 20px;">
      <p style="font-size:1.1rem;color:var(--color-gray);">
        <?php esc_html_e( 'No posts found. Check back soon for news and updates from RCGEN.', 'rcgen-theme' ); ?>
      </p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-navy" style="margin-top:20px;">
        <?php esc_html_e( 'Back to Home', 'rcgen-theme' ); ?>
      </a>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
