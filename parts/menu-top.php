<div class="top-menu">

  <!-- Extracts data -->
  <?php $menu_locations = get_nav_menu_locations ( ); ?>
  <?php $menu_elements = wp_get_nav_menu_items ( $menu_locations ['top'] ); ?>

  <!-- Loops through all the menu elements -->
  <?php foreach ( $menu_elements as $elem ) : ?>
    <a href="<?php echo $elem->url; ?>" class="top-menu-elem">
      <?php echo $elem->title; ?> </a>
  <?php endforeach; ?>

</div>