<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo ( 'name' ); ?></title>
  <?php wp_head ( ); ?>

</head>
<body>

  <!-- SVGs -->
  <?php get_template_part ( 'svg' ); ?>

  <!-- Top Area -->
  <div id="toparea">

    <!-- Shadow -->
    <div class="shadowy">
    </div>

    <!-- Logo -->
    <a href="<?php echo bloginfo ('url'); ?>" class="logo-container">
      <svg class="logo" viewBox="0 0 115 24">
        <use xlink:href="#icon-logo">
        </use>
      </svg>
    </a>

    <!-- Hamburger -->
    <div class="hamburger">
      <div class="lines">
      </div>
    </div>

<!-- Mobile menus -->
<div class="mobile-menus">
  <div class="mobile-menus-inner">
    <?php get_template_part ( 'parts/menu', 'types' ); ?>
    <?php get_template_part ( 'parts/menu', 'top' ); ?>
  </div>
</div>

    <!-- Top n' types menu -->
    <div class="std-menus">
      <?php get_template_part ( 'parts/menu', 'types' ); ?>
      <?php get_template_part ( 'parts/menu', 'top' ); ?> 
    </div>

  </div>