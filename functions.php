<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );   
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/sass/style.css', array('parent-style'), '1.0' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// Swiper + inclusion du fichier 'script.js'
function enqueue_swiper_js() {
    wp_enqueue_script( 'swiper-js', get_stylesheet_directory_uri() . '/sass/node_modules/swiper/swiper-bundle.min.js', array(), '1.0', true );
    // Appel du fichier "script.js" 
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/script.js', array( 'swiper-js' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_js' );

function enqueue_swiper_css() {
    wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri() . '/sass/node_modules/swiper/swiper-bundle.min.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_css' );

// Inclusion de jQuery 3.6.4 hébérgée par Google 
function replace_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery'); 
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', false, '3.6.4');
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'replace_jquery');

