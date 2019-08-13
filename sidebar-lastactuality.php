<?php
/**
 * The main template file
 *
 * ...
 *
 * @package scratch
 *
 */

$lastactuality = get_posts(array(
	'numberposts' => 3,
	'post_type' => 'actualite',
));
?>

<section class="lastposts">

	<div class="container">

	<?php if ($lastposts) : ?>

		<div class="col">

			<?php foreach ($lastposts as $post) : ?>
				<?php setup_postdata( $post ); ?>

				<article <?php post_class('col-md-6 col-lg-4'); ?>>
					<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
					<p><?php the_excerpt() ?></p>
				</article>
				<a href="<?= esc_url( home_url( '/' ) ) ?>/actualité/" class="btn btn-outline-primary my-5"><?php _e('Toutes les actualités', 'scratch'); ?></a>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>

		</div>

	<?php endif; ?>

	</div>

</section>



