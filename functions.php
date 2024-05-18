<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'wp-framework7-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('custom_javascript', get_stylesheet_directory_uri() . '/customElements.js');
});
//
// Your code goes below
//
