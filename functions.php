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
    wp_enqueue_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css' );

// Scripts
    
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'menu', get_template_directory_uri().'/js/menu.js');
    wp_enqueue_script( 'classie', get_template_directory_uri().'/js/classie.js', array(), false, true);
    wp_enqueue_script( 'uisearch', get_template_directory_uri().'/js/uisearch.js', array(), false, true);

    if(is_home() || is_front_page()) {
        wp_enqueue_script( 'header', get_template_directory_uri().'/js/header.js');
        }
}

add_action( 'wp_enqueue_scripts', 'sinodio_scripts' );

function load_font_google() {
  wp_enqueue_style( 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&family=Zilla+Slab+Highlight:wght@400;700&family=Zilla+Slab:ital,wght@0,400;0,700;1,400;1,700&display=swap' );
  wp_enqueue_style( 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'load_font_google' );

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