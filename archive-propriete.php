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
<h5>Nos propriétés</h5>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'propriete' ); ?>
    <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
<?php get_footer() ?>
