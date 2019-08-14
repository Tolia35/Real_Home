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
	'numberposts' => 4,
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

    <?php the_title( '<h2 class="entry-title h2">', '</h2>' ); ?>
      <div class="container">
        <div class="row">
          <div class="col-8">
    <?php the_post_thumbnail( 'thumb-680', array( 'class' => 'img-fluid' ) ); ?>
    </div>
<div class="col-4">
<div class="card">
        <div class="text-danger h3 text-center" style="width: 18rem;">
        <i class="fa fa-bookmark pr-3" aria-hidden="true" style="color:lightgrey;"></i> 
        <strong><?= $champ_prix['value'] ?> <?= $champ_prix['append'] ?></strong>
        </div>
        <div class="card-body">
	      <?= $champ_ville['label'] ?> : <strong><?= $champ_ville['value'] ?></strong></p>
	      <?= $champ_nombre_de_piece['label'] ?> : <strong><?= $champ_nombre_de_piece['value'] ?></strong></p>
	      <?= $champ_surface['label'] ?> : <strong><?= $champ_surface['value'] ?> <?= $champ_surface['append'] ?></strong></p>
        <?= $champ_info['label'] ?> : <strong><?= $champ_info['value'] ?> <?= $champ_info['append'] ?></strong></p>
        <p class="card-text border-top pt-1">
        <?= $champ_description['value'] ?></p>
        </div>
        </div>
        </div>
    </div>
    </div>
  </div>
</article>
<hr>

<div class="text-center">
<h2>Nos propriétés</h2>
</div>

<section class="py-5 front-proprietes container">
  <?php if ( $lastproperty ) : ?>
    <div class="row front-proprietes_grid">
      <?php foreach ( $lastproperty as $post ) :
          setup_postdata( $post );	

          get_template_part( 'template-parts/content', 'proprietemini' );

      endforeach; 
      wp_reset_postdata(); ?>
    </div>
  <?php endif;?>
  <div class="text-center">
    <a href="<?= esc_url( home_url( '/' ) ) ?>/propriete/" class="btn btn-outline-danger my-5"><?php _e('Toutes les propriétés', 'scratch'); ?></a>
  </div>
</section>

<?php get_footer(); ?>


