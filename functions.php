<?php

function add_files_into_theme() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'design', get_template_directory_uri() . '/assets/css/design.css',false,'1.1','all');
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', [], 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_files_into_theme' );

?>