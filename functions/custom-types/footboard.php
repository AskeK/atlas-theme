<?php

// Footboard post type
add_action( 'init', function ( ) {
	register_post_type( 'footboard', array(

    'menu_icon' 		     => 'dashicons-hammer',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 25,
    'show_in_rest'       => true,
    'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'rewrite'            => array( 'slug' => 'footboard' ),
    
    'labels'             => array(
      'name'               => __( 'Fodlister' ),
      'singular_name'      => __( 'Fodliste' ),
      'menu_name'          => __( 'Fodlister' ),
      'name_admin_bar'     => __( 'Fodlister' ),
      'add_new'            => __( 'Tilføj ny' ),
      'add_new_item'       => __( 'Tilføj ny fodliste' ),
      'new_item'           => __( 'Ny fodlist' ),
      'edit_item'          => __( 'Rediger' ),
      'view_item'          => __( 'Se fodliste' ),
      'all_items'          => __( 'Se alle' ),
      'search_items'       => __( 'Find fodliste' ),
      'parent_item_colon'  => __( 'Forældre:' ),
      'not_found'          => __( 'Start med at oprette en ny fodliste.' ),
      'not_found_in_trash' => __( 'Papirkurven er tom.' ),
    ),
    
  ));
});