<?php
/**
 * Default page template.
 *
 * @package rcgen-theme
 */

get_header();

while ( have_posts() ) :
  the_post();
?>

<div class="page-hero">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'rcgen-theme' ); ?></a>
      <span><?php the_title(); ?></span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container" style="max-width:860px;">
    <?php if ( has_post_thumbnail() ) : ?>
    <figure style="margin-bottom:32px; border-radius:var(--radius-lg); overflow:hidden;">
      <?php the_post_thumbnail( 'rcgen-hero', array( 'style' => 'width:100%;height:auto;' ) ); ?>
    </figure>
    <?php endif; ?>
    <div class="entry-content" style="font-size:1.05rem; line-height:1.8;">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php
endwhile;
get_footer();
?>
