<?php 

function load_theme_assets()
{
    // You can include these parameters:
    // $handle is simply the name of the stylesheet.
    // $src is where it is located. The rest of the parameters are optional.
    // $deps refers to whether or not this stylesheet is dependent on another stylesheet. If this is set, this stylesheet will not be loaded unless its dependent stylesheet is loaded first.
    // $ver sets the version number.
    // $media can specify which type of media to load this stylesheet in, such as ‘all’, ‘screen’, ‘print’ or ‘handheld.’
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/dist/js/bootstrap.js ');
    wp_enqueue_script('smooth-js', get_template_directory_uri() . '/dist/js/SmoothScroll.js ');
    wp_enqueue_script('isotope', get_template_directory_uri() . '/dist/js/jquery.isotope.js ');
    wp_enqueue_script('carousel', get_template_directory_uri() . '/dist/js/owl.carousel.js ');
    wp_enqueue_script('way', get_template_directory_uri() . '/dist/js/jquery.waypoints.min.js ');
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js');
    wp_enqueue_script('wow', get_template_directory_uri() . '/dist/js/wow.min.js ');
}
add_action('wp_enqueue_scripts', 'load_theme_assets');

function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation'),
        'footer' => __('Footer Navigation'),
    ]);
}
add_action('init', 'register_menus');

function register_widgets()
{
    register_sidebar([
        'name'          => 'Blog Sidebar',
        'id'            => 'sidebar',
    ]);
}
add_action('widgets_init', 'register_widgets');

add_theme_support('post-thumbnails');

add_filter('default_page_template_title', function () {
    return __('General');
});