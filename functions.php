<?php

require_once( __DIR__ . '/vendor/autoload.php' );

function BS4WordPress_scripts() {

    wp_enqueue_style("theme", get_template_directory_uri() . '/assets/dist/css/theme.css');
    wp_enqueue_script("theme", get_template_directory_uri() . '/assets/dist/js/theme.js');
}

add_action('wp_enqueue_scripts', 'BS4WordPress_scripts');


function BS4WordPress_nav_menus() {
    register_nav_menus([
        'primary' => __( 'Primary' )
    ]);
}
add_action('init', 'BS4WordPress_nav_menus');
