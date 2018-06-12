<?php

// Imports files
// Functions root
import ( array (
  
  'setup',
  'includes'

));

// Custom types
import ( array ( 
  
  'plank-16mm',
  'plank-21mm',
  'parquet',
  'footboard'

), 'custom-types' );

// Import Function
function import ( $files, $path='' ) {
  $full_path = __DIR__ . '/functions/' . $path . '/';
  for ( $n = 0; $n < count ( $files ); $n ++ ) {
    require_once $full_path . $files [$n] . '.php'; 
  }
}