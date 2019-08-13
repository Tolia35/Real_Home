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

$champ_date = get_field_object('date');
$champ_description = get_field_object('description');

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

<article <?php post_class('card-propriete-article'); ?>>
    <div class="card-propriete_content p-3">
	  <?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
	  <?php the_post_thumbnail( 'thumb-255', array( 'class' => 'img-fluid' ) ); ?></p>
	 <?= $champ_date['value'] ?> <?= $champ_date ?></p>
	  <?= $champ_description['value'] ?>
    </div>
</article>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
