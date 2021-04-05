<?php

/**
 * Register a custom post type called "services".
 *
 * @see get_post_type_labels() for label keys.
 */
function services() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Services', 'Add New on Toolbar', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'services', $args );
}
 
add_action( 'init', 'services');

?>



<?php

/**
 * Register a custom post type called "partners".
 *
 * @see get_post_type_labels() for label keys.
 */
function partners() {
    $labels = array(
        'name'                  => _x( 'Partners', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Partner', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Partners', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Partners', 'Add New on Toolbar', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'partners' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'partners', $args );
}
 
add_action( 'init', 'partners');

?>