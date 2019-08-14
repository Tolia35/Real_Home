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

$champ_date = get_field_object('date');
$champ_corps_de_texte = get_field_object('corps_de_texte');

?>

	<section id="primary" class="content-area container">
		<main id="main" class="site-main col-9">

<article <?php post_class('card-propriete-article'); ?>>
    <div class="card-propriete_content p-3">
	  <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
	  <?= $champ_date['value'] ?></p>
	  <?php the_post_thumbnail( 'thumb-555', array( 'class' => 'img-fluid' ) ); ?></p>
	  <?= $champ_corps_de_texte['value'] ?>
    </div>
</article>

		</main><!-- #main -->
		<?php get_sidebar('lastactuality') ?>
		</section><!-- #primary -->
    	<?php get_footer() ?>

<?php


