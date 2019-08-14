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

$ville_array = get_field_object('ville')['choices'];
$values = isset($_GET['ville']) ? (array)$_GET['ville'] : [];

?>
<div class="container py-5">

<aside class="aside-filter mb-5 p-3">
    <form action="<?= $_SERVER['REQUEST_URI'] ?>"
          method="get"
          class="archive-filter-form form-inline">
        <p class="mb-lg-0 mr-3">
            <?php _e('Filtrer par ville:', 'scratch'); ?>
        </p>
        <?php foreach ($ville_array as $key => $ville) : ?>
            <div class="form-check form-check-inline">
                <input type="checkbox"
                       name="ville[]"
                       value="<?= $key ?>"
                       id="ville-<?= $key ?>"
                    <?php if (in_array($key, $values)): ?>
                        checked
                    <?php endif; ?>
                       class="propriete-filters-field form-check-input">
                <label for="ville-<?= $key ?>"
                       class="form-check-label"><?= $ville ?>
                </label>
            </div>

        <?php endforeach; ?>
        <button class="btn btn-outline-primary ml-auto" type="submit">Filtrer</button>
    </form>
</aside>

<section class="py-5 front-proprietes container">
  <div class="text-center">
<h2>Nos propriétés</h2>
</div>

    <div class="row front-proprietes_grid">	
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'propriete' ); ?>
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
