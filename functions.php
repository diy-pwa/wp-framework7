<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'wp-framework7-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style( 'wp-framework7-style1', 'https://unpkg.com/framework7/framework7-bundle.min.css');
    wp_enqueue_style( 'wp-framework7-style2', 'https://unpkg.com/framework7-icons');
    wp_enqueue_script('wp-framework7-javascript', get_stylesheet_directory_uri() . '/customElements.js');
    wp_enqueue_script('wp-framework7-javascript1', 'https://unpkg.com/framework7/framework7-bundle.min.js');
    wp_enqueue_script('wp-framework7-javascript2', get_stylesheet_directory_uri() . '/framework7Start.js');
});
//
// Your code goes below
//
