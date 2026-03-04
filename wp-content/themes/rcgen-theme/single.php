<?php
/**
 * Single post template.
 *
 * @package rcgen-theme
 */

get_header();

while ( have_posts() ) :
  the_post();
  $cats = get_the_terms( get_the_ID(), 'category' );
  $cat_name = ( $cats && ! is_wp_error( $cats ) ) ? $cats[0]->name : '';
?>

<div class="page-hero">
  <div class="container">
    <?php if ( $cat_name ) : ?>
    <span class="section-tag" style="color:var(--color-gold); display:block; margin-bottom:10px;">
      <?php echo esc_html( $cat_name ); ?>
    </span>
    <?php endif; ?>
    <h1><?php the_title(); ?></h1>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'rcgen-theme' ); ?></a>
      <span><?php the_title(); ?></span>
    </div>
  </div>
</div>

<article class="section" style="background:var(--color-white);">
  <div class="container" style="max-width:800px;">

    <div style="display:flex; gap:16px; align-items:center; margin-bottom:32px; flex-wrap:wrap; font-size:0.88rem; color:var(--color-gray);">
      <span>&#x1F4C5; <?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
      <span>&#x270D; <?php the_author(); ?></span>
      <?php if ( $cat_name ) : ?>
      <span style="background:var(--color-gold); color:var(--color-navy); border-radius:50px; padding:3px 12px; font-weight:700; font-size:0.78rem; text-transform:uppercase; letter-spacing:1px;">
        <?php echo esc_html( $cat_name ); ?>
      </span>
      <?php endif; ?>
    </div>

    <?php if ( has_post_thumbnail() ) : ?>
    <figure style="margin-bottom:32px; border-radius:var(--radius-lg); overflow:hidden;">
      <?php the_post_thumbnail( 'rcgen-hero', array( 'style' => 'width:100%; height:auto;' ) ); ?>
    </figure>
    <?php endif; ?>

    <div class="entry-content" style="font-size:1.05rem; line-height:1.8; color:var(--color-text);">
      <?php the_content(); ?>
    </div>

    <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    if ( $prev_post || $next_post ) :
    ?>
    <nav style="margin-top:56px; display:flex; gap:16px; justify-content:space-between; flex-wrap:wrap; border-top:1px solid #eee; padding-top:32px;">
      <?php if ( $prev_post ) : ?>
      <a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="btn btn-navy" style="font-size:.88rem; padding:10px 20px;">
        &larr; <?php esc_html_e( 'Previous', 'rcgen-theme' ); ?>
      </a>
      <?php endif; ?>
      <?php if ( $next_post ) : ?>
      <a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="btn btn-navy" style="font-size:.88rem; padding:10px 20px;">
        <?php esc_html_e( 'Next', 'rcgen-theme' ); ?> &rarr;
      </a>
      <?php endif; ?>
    </nav>
    <?php endif; ?>

  </div>
</article>

<?php
endwhile;
get_footer();
?>
