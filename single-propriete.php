<?php
/**
 * The main template file
 *
 * ...
 *
 * @package scratch
 *
 */



get_header();

$lastproperty = get_posts( array(
	'numberposts' => 5,
  'post_type' => 'propriete', /*le slug du CPTU propriété - a changer si demenagé */
  'orderby' => 'rand'
) );

?>

<?php

$champ_prix = get_field_object('prix');
$champ_ville = get_field_object('ville');
$champ_surface = get_field_object('surface');
$champ_info = get_field_object('info');
$champ_description = get_field_object('description');
$champ_nombre_de_piece = get_field_object('nombre_de_piece');

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

<article <?php post_class('card-propriete-article'); ?>>
    <div class="card-propriete_content p-3">
	  <?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
	  <?php the_post_thumbnail( 'thumb-255', array( 'class' => 'img-fluid' ) ); ?></p>
	 <strong><?= $champ_prix['value'] ?> <?= $champ_prix['append'] ?></strong></p>
	  <?= $champ_ville['label'] ?> : <strong><?= $champ_ville['value'] ?></strong></p>
	  <?= $champ_nombre_de_piece['label'] ?> : <strong><?= $champ_nombre_de_piece['value'] ?></strong></p>
	  <?= $champ_surface['label'] ?> : <strong><?= $champ_surface['value'] ?> <?= $champ_surface['append'] ?></strong></p>
	  <?= $champ_info['label'] ?> : <strong><?= $champ_info['value'] ?> <?= $champ_info['append'] ?></strong></p>
	  <?= $champ_description['value'] ?>
    </div>
</article>

		</main><!-- #main -->
	</section><!-- #primary -->

	<section class="container">
  <?php if ( $lastproperty ) : ?>
    <div class="front-proprietes_grid">
      <?php foreach ( $lastproperty as $post ) :
          setup_postdata( $post );	

          get_template_part( 'template-parts/content', 'propriete' ); /* renvoi vers templatepart > contentpriopriete */

      endforeach; 
      wp_reset_postdata(); ?>
    </div>
  <?php endif;?>
  <div class="text-center"> 
    <a href="<?= esc_url( home_url( '/' ) ) ?>/propriete/" class="btn btn-outline-primary my-5"><?php _e('Toutes les propriétés', 'scratch'); ?></a>
  </div>
</section>

    <?php get_footer() ?>
<?php



