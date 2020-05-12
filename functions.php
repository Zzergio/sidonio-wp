<?php

function sinodio_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'gallery'
    ));    
    register_nav_menu('primary','Primary menu');
}

add_action('after_setup_theme','sinodio_setup' );

// CSS

function sinodio_scripts() {
    wp_enqueue_style( 'normalize', get_template_directory_uri().'/normalize.css');
    wp_enqueue_style('style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'media-style', get_template_directory_uri().'/media.css');

// Scripts
    
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/scripts.js');

    if(is_home() || is_front_page()) {
        wp_enqueue_script( 'scripts-index', get_template_directory_uri().'/js/scripts-index.js');
        wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
        wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
        }
}

add_action( 'wp_enqueue_scripts', 'sinodio_scripts' );

// Scripts for index page only

// add_action('wp', 'index_page_scripts');

// function index_page_scripts(){
//    if( is_front_page() ) {
//        add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
//    }
//}

// function my_scripts_method() {
//    wp_enqueue_script( 'scripts-index', get_template_directory_uri().'/js/scripts-index.js');
//    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
//    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
//}

// SVG support

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

add_filter('show_admin_bar', '__return_false');
add_filter('excerpt_more', function($more) {
    return ' →';
});
add_filter( 'excerpt_length', function(){
    return 20;
} );