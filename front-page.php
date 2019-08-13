<?php
/**
 * The main template file
 *
 *
 * @package scratch
 */
$lastproperty = get_posts( array(
	'numberposts' => 6,
  'post_type' => 'propriete', /*le slug du CPTU propriété - a changer si demenagé */
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


<section class="py-5 front-proprietes container">
  <?php if ( $lastproperty ) : ?>
    <div class="row front-proprietes_grid">
      <?php foreach ( $lastproperty as $post ) :
          setup_postdata( $post );	

          get_template_part( 'template-parts/content', 'propriete' );

      endforeach; 
      wp_reset_postdata(); ?>
    </div>
  <?php endif;?>
  <div class="text-center">
    <a href="<?= esc_url( home_url( '/' ) ) ?>/propriete/" class="btn btn-outline-primary my-5"><?php _e('Toutes les propriétés', 'scratch'); ?></a>
  </div>
</section>

<?php get_footer(); ?>