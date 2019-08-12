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
$champ_infos = get_field_object('infos');
$champ_illustration = get_field_object('illustration');
$champ_description = get_field_object('description');


get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

<article <?php post_class('card-propriete-article'); ?>>
    <div class="card-propriete_content p-3">
	  <?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
	 <strong><?= $champ_prix['value'] ?> <?= $champ_prix['append'] ?></strong></p>
	  <?= $champ_ville['label'] ?> : <strong><?= $champ_ville['value'] ?></strong></p>
	  <?= $champ_surface['label'] ?> : <strong><?= $champ_surface['value'] ?></strong></p>
	  <?= $champ_infos['label'] ?> : <strong><?= $champ_infos['value'] ?></strong></p>
	  <?= $champ_illustration['label'] ?> : <strong><?= $champ_illustration['value'] ?></strong></p>
	  <strong><?= $champ_description['value'] ?></strong>
    </div>
</article>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
