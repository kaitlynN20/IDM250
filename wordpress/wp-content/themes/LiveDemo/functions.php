<?php
//Theme will only work for Wordpress 4.9.6 or later.
//if (version_compare($GLOBALS['wp-version'], '4.9.6', '<')) {
//    die('This theme only works in Wordpress 4.9.6 or later. Please update Wordpress to use this theme.');
//}
//
//

//working menus
function register_menus() {
    register_nav_menus([
        'main_menu' => __('Main Navigation'),
        'footer_menu' => __('Footer Navigation'),
    ]);
    
}

//when wordpress runs (init)... Call the function register_menus()
add_action('init', 'register_menus');

function load_theme_assets(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/dist/css/bootstrap.css');
    wp_enqueue_style('mainstyle', get_template_directory_uri().'/dist/css/style.css');
    wp_enqueue_style('owlcarousel', get_template_directory_uri().'/dist/css/owl.carousel.css');
    wp_enqueue_style('owltheme', get_template_directory_uri().'/dist/css/owl.theme.css');
    wp_enqueue_style('owlanimate', get_template_directory_uri().'/dist/css/animate.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/dist/css/font-awesome.css');
    
}

add_action('wp_enqueue_scripts', 'load_theme_assets');