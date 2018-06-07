<?php

// Imports files
import ( array (
  'setup'
));

// Import Function
function import ( $files, $path='' ) {
  $full_path = __DIR__ . '/functions/' . $path . '/';
  for ( $n = 0; $n < count ( $files ); $n ++ ) {
    require_once $full_path . $files [$n] . '.php'; 
  }
}