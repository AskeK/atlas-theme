<?php

// Footboard post type
add_action( 'init', function ( ) {
	register_post_type( 'parquet', array(

    'menu_icon' 		     => 'dashicons-hammer',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 24,
    'show_in_rest'       => true,
    'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'rewrite'            => array( 'slug' => 'parquet' ),
    
    'labels'             => array(
      'name'               => __( 'Sildebensparketter' ),
      'singular_name'      => __( 'Sildebensparket' ),
      'menu_name'          => __( 'Sildebensparket' ),
      'name_admin_bar'     => __( 'Sildebensparket' ),
      'add_new'            => __( 'Tilføj nyt' ),
      'add_new_item'       => __( 'Tilføj nyt sildebensparket' ),
      'new_item'           => __( 'Nyt sildebensparket' ),
      'edit_item'          => __( 'Rediger' ),
      'view_item'          => __( 'Se sildebensparket' ),
      'all_items'          => __( 'Se alle' ),
      'search_items'       => __( 'Find sildebensparket' ),
      'parent_item_colon'  => __( 'Forældre:' ),
      'not_found'          => __( 'Start med at oprette et nyt sildebensparket.' ),
      'not_found_in_trash' => __( 'Papirkurven er tom.' ),
    ),
    
  ));
});