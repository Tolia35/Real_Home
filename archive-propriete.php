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


<section class="py-5 front-proprietes container">
  <div class="text-center">
<h2>Nos propriétés</h2>
</div>

    <div class="row front-proprietes_grid">	
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'propriete' ); ?>
    <?php endwhile; ?>
    <div class="container">
    <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        </div>
  <?php endif;?>
</section>
</div>
<?php get_footer() ?>
