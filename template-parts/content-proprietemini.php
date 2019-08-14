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

<article <?php post_class('card-propriete-article col-md-4'); ?>>
	<div class="card m-1 text-center" style="width: 350px;">
		<a class="card-spot_link" href="<?php the_permalink(); ?>">
      	<figure class="card-propriete-figure mb-0">
        <?= get_the_post_thumbnail($post->ID, 'thumb-555', array('class' => 'img-fluid card-propriete_img d-flex justify-content-center')) ?>
	  	</figure>
    <div class="card-body">
		<?php the_title('<h2 class="entry-title h5 text-danger">', '</h2>'); ?>
		</a>
        <p><?= $champ_ville['value'] ?></p>
        <p><strong><?= $champ_prix['value'] ?> <?= $champ_prix['append'] ?></strong></p>
      </div>
	</div>
</article>