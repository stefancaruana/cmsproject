<?php
//* Code goes here
//add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

//function enqueue_parent_styles() {
   //wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
//}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' ); 
function my_theme_enqueue_styles() {
    $parent_style = 'twentyseventeen-style'; 
    $child_style = 'twentyseventeen-child-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $child_style, get_stylesheet_uri() );
}
