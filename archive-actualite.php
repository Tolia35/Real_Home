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
  <div class="text-center m-2">
<h3>Nos actualités</h3>
</div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'actualite' ); ?>
    <?php endwhile; ?>
    <div class="container d-flex justify-content-center">
    <?php the_posts_pagination(); ?>
    </div>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        </div>
  <?php endif;?>
</section>
</div>
<?php get_footer() ?>
