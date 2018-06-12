<?php

// Footboard post type
add_action( 'init', function ( ) {
	register_post_type( 'plank_16mm', array(

    'menu_icon' 		     => 'dashicons-hammer',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 23,
    'show_in_rest'       => true,
    'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'rewrite'            => array( 'slug' => 'plank_16mm' ),
    
    'labels'             => array(
      'name'               => __( '16mm lamelplanker' ),
      'singular_name'      => __( '16mm lamelplank' ),
      'menu_name'          => __( '16MM' ),
      'name_admin_bar'     => __( '16MM' ),
      'add_new'            => __( 'Tilføj ny' ),
      'add_new_item'       => __( 'Tilføj ny 16mm lamelplank' ),
      'new_item'           => __( 'Ny 16mm lamelplank' ),
      'edit_item'          => __( 'Rediger' ),
      'view_item'          => __( 'Se 16mm lamelplank' ),
      'all_items'          => __( 'Se alle' ),
      'search_items'       => __( 'Find 16mm lamelplank' ),
      'parent_item_colon'  => __( 'Forældre:' ),
      'not_found'          => __( 'Start med at oprette en ny 16mm lamelplank.' ),
      'not_found_in_trash' => __( 'Papirkurven er tom.' ),
    ),
    
  ));
});