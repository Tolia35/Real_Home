 <?php
/**
 * The main template file
 *
 * ...
 *
 * @package scratch
 *
 */
?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_terms( $post->ID, 'categorie', 'Categorie: ' ); ?><br>
    <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
