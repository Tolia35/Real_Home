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
$champ_corps_de_texte = get_field_object('corps_de_texte');

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<article class="col-md-3" <?php post_class('card-propriete-article'); ?>>
		<div class="card m-4" style="width: 600px; border:none;">
  	<a class="card-spot_link" href="<?php the_permalink(); ?>">
	<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
	  <?= $champ_date['value'] ?></p>
    <figure class="card-propriete-figure mb-0">
    <?= get_the_post_thumbnail($post->ID, 'thumb-730', array( 'class' => 'img-fluid card-propriete_img' )) ?>
    </figure> 
	</a>
	<div class="m-2" style="font-size: 15px;">
	  <?= $champ_corps_de_texte['value'] ?>
</div>
<?php the_excerpt() ?>
	</div>
</article>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
