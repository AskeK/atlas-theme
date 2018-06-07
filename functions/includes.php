<?php

// Enqueues scripts and fonts
add_action ( 'wp_enqueue_scripts', function ( ) {
  
  wp_enqueue_script ( 'bundle', get_template_directory_uri ( ) . '/scripts/main.bundle.js' );
  wp_enqueue_style ( 'opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700' );

});