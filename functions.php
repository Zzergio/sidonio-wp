<?php

function sinodio_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
    
    add_image_size( 'sinodio-mini', 212, 212, true );

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
    wp_enqueue_script( 'search', get_template_directory_uri().'/js/search.js');

    if(is_home() || is_front_page()) {
        wp_enqueue_script( 'header', get_template_directory_uri().'/js/header.js');
        }
}

add_action( 'wp_enqueue_scripts', 'sinodio_scripts' );

// Google Fonts

function load_fonts(){            
    wp_register_style('zilla', 'https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    wp_enqueue_style( 'zilla'); 
    wp_register_style('zilla-highlight', 'https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@400;700&display=swap');
    wp_enqueue_style( 'zilla-highlight');   
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap');
    wp_enqueue_style( 'montserrat'); 
    wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
    wp_enqueue_style( 'font-awesome');       
}    
add_action('wp_print_styles', 'load_fonts');

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

// CF7 Customization

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

// Search Form

add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

    $form = '
    <form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '">
        <label><span class="strong">Escribe el nombre de quien buscas</span>
        <input type="search" class="search-field" placeholder="p.ej, Piñera" value="' . get_search_query() . '" name="s" title="" /></label>
        <input type="submit" class="search-submit" value="" />
    </form>';

    return $form;
};

// Search Filter

function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post'));
    }
return $query;
}
add_filter('pre_get_posts','searchfilter');