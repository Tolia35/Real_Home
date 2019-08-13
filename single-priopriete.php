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
?>

<?php

$champ_prix = get_field_object('prix');
$champ_ville = get_field_object('ville');
$champ_surface = get_field_object('surface');
$champ_infos = get_field_object('infos');
$champ_description = get_field_object('description');

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

<article <?php post_class('card-propriete-article'); ?>>
    <div class="card-propriete_content p-3">
	  <?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
	  <?php the_post_thumbnail( 'thumb-255', array( 'class' => 'img-fluid' ) ); ?></p>
	 <strong><?= $champ_prix['value'] ?> <?= $champ_prix['append'] ?></strong></p>
	  <?= $champ_ville['label'] ?> : <strong><?= $champ_ville['value'] ?></strong></p>
	  <?= $champ_surface['label'] ?> : <strong><?= $champ_surface['value'] ?></strong></p>
	  <?= $champ_infos['label'] ?> : <strong><?= $champ_infos['value'] ?></strong></p>
	  <?= $champ_description['value'] ?>
    </div>
</article>

		</main><!-- #main -->
	</section><!-- #primary -->

    <?php get_footer() ?>
<?php



