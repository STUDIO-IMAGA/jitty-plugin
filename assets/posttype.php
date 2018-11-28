<?php
/**
 * Treatments Post Type
 */
function create_post_type_treatments() {

  $labels = array(
    'name'                  => _x( 'Behandelingen', 'Behandeling General Name', 'imaga' ),
    'singular_name'         => _x( 'Behandeling', 'Behandeling Singular Name', 'imaga' ),
  );

  $args = array(
    'label'                 => __( 'Behandelingen', 'imaga' ),
    'description'           => __( 'Alle behandelingen van Jitty\'s', 'imaga' ),
    'labels'                => $labels,
    'supports'              => array( 'title' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 26, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
    'menu_icon'             => 'dashicons-cart',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );

  // Registering the post type
  register_post_type( 'treatments', $args );
}
add_action( 'init', __NAMESPACE__ . '\\create_post_type_treatments' );
