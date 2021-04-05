<?php

/**
 * Register a custom post type called "hotels".
 *
 * @see get_post_type_labels() for label keys.
 */
function hotels() {
    $labels = array(
        'name'                  => _x( 'Hotels', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Hotel', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Hotels', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Hotels', 'Add New on Toolbar', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'hotels' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'hotels', $args );
}
 
add_action( 'init', 'hotels');

?>


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