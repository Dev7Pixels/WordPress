<?php

function add_theme_scripts() {
   
    wp_enqueue_style ( 'custom', get_template_directory_uri () . '/assets/css/custom.css', array() ,'1.0.0', 'all');
    wp_enqueue_style ( 'sidebar', get_template_directory_uri () . '/assets/css/sidebar.css', array() ,'1.0.1', 'all');

    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);

    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
     
     
}
add_action ( 'wp_enqueue_scripts', 'add_theme_scripts' );