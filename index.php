<?php get_header ( ); ?>


<?php // Extracts posts data
$posts = get_posts ( array (

  // Post types
  'post_type' => array (
    'plank_21mm', 'plank_16mm',
    'parquet', 'footboard'
  ),

  // That should be shown in
  // the frontpage slider
  'meta_query' => array ( array (
    'key'     => 'frontpage_slider',
    'value'   => 'yes',
    'compare' => '='
  ))

)); ?>

<!-- Frontpage slider -->
<div class="frontpage_slider">

</div>


<?php get_footer ( ); ?>