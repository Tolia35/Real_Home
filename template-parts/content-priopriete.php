<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$champ_prix = get_field_object('prix');
$champ_ville = get_field_object('ville');
$champ_surface = get_field_object('surface');
$champ_info = get_field_object('info');
$champ_nombre_de_chambre = get_field_object('nombre_de_chambre');

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

<article <?php post_class('card-propriete-article'); ?>>
    <div class="card-propriete_content p-3">
	<?php the_post_thumbnail( 'thumb-255', array( 'class' => 'img-fluid' ) ); ?></p>
	<?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
	<strong><?= $champ_ville['value'] ?></strong></p>
	<strong><?= $champ_prix['value'] ?> <?= $champ_prix['append'] ?></strong></p>
	<?= $champ_surface['value'] ?> <?= $champ_surface['append'] ?>
	<?= $champ_nombre_de_chambre['value'] ?> <?= $champ_nombre_de_chambre['append'] ?>
	<?= $champ_info['value'] ?> <?= $champ_info['append'] ?>
    </div>
</article>

		</main><!-- #main -->
	</section><!-- #primary -->
