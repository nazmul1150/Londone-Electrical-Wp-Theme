<?php

// Register Custom Post Type: Services
function londone_register_services_cpt() {

    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'londone-electrical' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'londone-electrical' ),
        'menu_name'             => __( 'Services', 'londone-electrical' ),
        'name_admin_bar'        => __( 'Service', 'londone-electrical' ),
        'add_new_item'          => __( 'Add New Service', 'londone-electrical' ),
        'edit_item'             => __( 'Edit Service', 'londone-electrical' ),
        'new_item'              => __( 'New Service', 'londone-electrical' ),
        'view_item'             => __( 'View Service', 'londone-electrical' ),
        'view_items'            => __( 'View Services', 'londone-electrical' ),
        'search_items'          => __( 'Search Service', 'londone-electrical' ),
        'not_found'             => __( 'Not found', 'londone-electrical' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'londone-electrical' ),
    );

    $args = array(
        'label'                 => __( 'Service', 'londone-electrical' ),
        'description'           => __( 'Custom post type for services', 'londone-electrical' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-hammer', // Icon for Services
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true, // Enable Gutenberg
        'capability_type'       => 'post',
    );

    register_post_type( 'services', $args );
}
add_action( 'init', 'londone_register_services_cpt' );
