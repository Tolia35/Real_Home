<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme configuration
function scratch_setup(){
// Document title
add_theme_support( 'title-tag' );

// Post thumbnails
add_theme_support( 'post-thumbnails' );

// Navigations 
register_nav_menus(
    array(
      'primary' => __( 'Primary Menu', 'scratch' ),
      'social' => __( 'Social Menu', 'scratch' ),
    )
  );

// Custom Image sizes
  add_image_size('thumb-255', 255, 170, true);
  add_image_size('thumb-555', 555, 410, true);
  add_image_size('thumb-680', 680, 440, true);
  add_image_size('thumb-730', 730, 492, true);

}
add_action( 'after_setup_theme', 'scratch_setup' );

// Styles & scripts
function scratch_scripts() {

    wp_enqueue_style( 'googlefont', '//fonts.googleapis.com/css?family=Raleway:500&display=swap' );
    wp_enqueue_style( 'googlefont', '//fonts.googleapis.com/css?family=Raleway:500,700&display=swap' );
    wp_enqueue_style( 'googlefont', '//fonts.googleapis.com/css?family=Playfair+Display&display=swap' );
    wp_enqueue_style('forkawesome', 'https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.min.css' );

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', 'jquery' );
    //wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
}
add_action( 'wp_enqueue_scripts', 'scratch_scripts' );

// Sidebars
function scratch_widgets_init() {
    register_sidebar(
        array (
            'name' => __( 'Footer', 'scratch' ),
            'id' => 'sidebar-footer',
            'description' => __( 'Custom Sidebar', 'scratch' ),
            'before_widget' => '<section class="widget col-md-6 col-lg-4 d-flex flex-column align-items-center">',
            'after_widget' => "</section>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
  }
  add_action( 'widgets_init', 'scratch_widgets_init' );
  
// Excerpt
add_filter('excerpt_more', function () {
  return '&hellip;';
});
add_filter('get_the_excerpt', function ($excerpt) {
  $excerpt_more = '<div class="more-link"><a class="btn btn-outline-primary" href="' . get_permalink() . '" >' . __( 'Lire la suite', 'scratch' ) . '</a></div>';
  return $excerpt . $excerpt_more;
});
/**
* Excerpt length
*/
add_filter( 'excerpt_length', function ( $length ) {
  return 36;
}, 999 );

/**
 * Archive proprietes filter
 */
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{
    // validate
    if (is_admin()) return;
    if (!$query->is_main_query()) return;
    if (is_post_type_archive('propriete')) {
        if (isset($_GET['ville'])) {
            $query->set('meta_key', 'ville');
            $query->set('meta_query', array(
                array(
                    'key' => 'ville',
                    'value' => $_GET['ville'],
                    'compare' => 'IN',
                )
            ));
        }
    }
    // always return
    return;
}