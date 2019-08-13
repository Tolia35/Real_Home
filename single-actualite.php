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

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

<article <?php post_class('card-propriete-article'); ?>>
    <div class="card-propriete_content p-3">
	  <?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
	  <?php the_post_thumbnail( 'thumb-255', array( 'class' => 'img-fluid' ) ); ?></p>
	 <?= $champ_date['value'] ?> <?= $champ_date ?></p>
	  <?= $champ_corps_de_texte['value'] ?>
    </div>
</article>

		</main><!-- #main -->
	</section><!-- #primary -->

    <?php get_footer() ?>

<?php


