<?php

function wpecf_register_assets () {
    wp_register_style('style-ecf', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-ecf');

    wp_register_script('scripts-ecf', get_template_directory_uri() . '/assets/js/scripts.js', [], false, true);
    wp_enqueue_script('scripts-ecf');
    
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' );
}

add_action('wp_enqueue_scripts', 'wpecf_register_assets');
