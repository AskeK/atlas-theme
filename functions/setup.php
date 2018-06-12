<?php

// Initilization
add_action ( 'init', function ( ) {

  // Hide admin bar
  show_admin_bar ( false );

  // Menu Locations
  register_nav_menus ( array (
    'top' => 'Topbar',
  ));

  // Theme Supports
  add_theme_support( 'post-thumbnails' ); 

});