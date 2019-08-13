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
  	<a class="card-spot_link" href="<?php the_permalink(); ?>">
	<?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>  
	  <?= $champ_date['value'] ?></p>
    <figure class="card-propriete-figure mb-0">
    <?= get_the_post_thumbnail($post->ID, 'thumb-730', array( 'class' => 'img-fluid card-propriete_img' )) ?>
    </figure> 
	</a>
	  <?= $champ_corps_de_texte['value'] ?>
	</div>
</article>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
