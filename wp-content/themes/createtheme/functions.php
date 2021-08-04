<?php

function add_theme_scripts() {
   
    wp_enqueue_style ( 'custom', get_template_directory_uri () . '/assets/css/custom.css', array() ,'1.0.0', 'all');

    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);
}
add_action ( 'wp_enqueue_scripts', 'add_theme_scripts' );


// if ( is_page_template( 'template-part/page_rtl.php' ) ) {
//     include_once 'template-part/page_rtl.php';
// }

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'menu_class'     =>  __( 'navigation-main' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
