<?php

function add_files_into_theme() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'design', get_template_directory_uri() . '/assets/css/design.css',false,'1.1','all');
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', [], 1.1, false);
}
add_action( 'wp_enqueue_scripts', 'add_files_into_theme' );

function exp_register_taxonomy_course() {
    $labels = array(
        'name'              => _x( 'Courses', 'taxonomy general name' ),
        'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Courses' ),
        'all_items'         => __( 'All Courses' ),
        'parent_item'       => __( 'Parent Course' ),
        'parent_item_colon' => __( 'Parent Course:' ),
        'edit_item'         => __( 'Edit Course' ),
        'update_item'       => __( 'Update Course' ),
        'add_new_item'      => __( 'Add New Course' ),
        'new_item_name'     => __( 'New Course Name' ),
        'menu_name'         => __( 'Course' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'course', [ 'post' ], $args );
}
add_action( 'init', 'exp_register_taxonomy_course');

?>