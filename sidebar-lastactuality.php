<?php
/**
 * The main template file
 *
 * ...
 *
 * @package scratch
 *
 */

$champ_date = get_field_object('date');
$champ_corps_de_texte = get_field_object('corps_de_texte');

$lastactuality = get_posts(array(
	'numberposts' => 3,
	'post_type' => 'actualite',
));
?>


<section class="lastposts">
	<?php if ($lastactuality) : ?>
		<h5>Dernières publications</h5>
			<?php foreach ($lastactuality as $post) : ?>
				<?php setup_postdata( $post ); ?>

				<article <?php post_class('card-propriete-article'); ?>>
  					<a class="card-spot_link" href="<?php the_permalink(); ?>">
					<?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>  
	  				<?= $champ_date['value'] ?></p>
					</a>
					<div style="font-size: 12px;">
					  <?= $champ_corps_de_texte['value'] ?>
					  </div>
					</article>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
	<?php endif; ?>
	<a href="<?= esc_url( home_url( '/' ) ) ?>/actualité/" class="btn btn-outline-primary my-5"><?php _e('Toutes les actualités', 'scratch'); ?></a>
</section>



