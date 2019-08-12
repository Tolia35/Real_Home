<?php
/**
 * The main template file
 *
 *
 * @package scratch
 */
$lastproperty = get_posts( array(
	'numberposts' => 6,
  'post_type' => 'propritété',
  'orderby' => 'rand'
) );

get_header(); 
?>

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
      <?php the_content() ?>
  </article>
  <?php endwhile; ?>

  <?php else : ?>
  <div class="container py-5">
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'scratch' ); ?></p>
  </div>
  <?php endif; ?>

</main>

<section class="container">
  <?php if ( $lastproperty ) : ?>
    <div class="front-proprietes_grid">
      <?php foreach ( $lastproperty as $post ) :
          setup_postdata( $post );	

          get_template_part( 'template-parts/content', 'property' );

      endforeach; 
      wp_reset_postdata(); ?>
    </div>
  <?php endif;?>
  <div class="text-center">
    <a href="<?= esc_url( home_url( '/' ) ) ?>/propriete/" class="btn btn-outline-primary my-5"><?php _e('Toutes les propriétés', 'scratch'); ?></a>
  </div>
</section>

  <?php if ( $lastposts ) : ?>

    <section class="front-sticky-post container my-5">
      <?php foreach ( $lastposts as $post ) :
          setup_postdata( $post );	?>

        <article <?php post_class('sticky-post_article row'); ?>>
          <div class="sticky-post_content py-4 bg-white col-sm-10 offset-sm-1 col-md-5 offset-md-0 ">
            <h2><?php _e('À la une', 'scratch'); ?></h2>
            <h3 class="h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
          </div>
        </article>

      <?php endforeach; 
      wp_reset_postdata(); ?>
  </section>

<?php endif;?>

<?php get_footer(); ?>