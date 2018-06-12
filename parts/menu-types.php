

<?php 

// Extracts data
// Current URL
$current_url = home_url ( add_query_arg ( 
  array ( ), $wp->request 
)) . '/';

// 21MM Plank
$planks_21mm = get_posts ( array (
  'post_type' => 'plank_21mm',
  'posts_per_page' => -1
));

// 16MM Plank
$planks_16mm = get_posts ( array (
  'post_type' => 'plank_16mm',
  'posts_per_page' => -1
));

// Parquets
$parquets = get_posts ( array (
  'post_type' => 'parquet',
  'posts_per_page' => -1
));

// Footboards
$footboards = get_posts ( array (
  'post_type' => 'footboard',
  'posts_per_page' => -1
));

// Functions
// Formatting function
if ( !function_exists ( 'format' ) ) {
  function format ( $arr ) {

    // Generates response
    $response = [ ];
    foreach ( $arr as $post ) {
      $response [ ] = array (

        'ID' => $post->ID,
        'title' => $post->post_title,
        'url' => get_permalink ( $post->ID )

      );
    }

    // Returns
    return $response;

  }
}

// Menu element active function
if ( !function_exists ( 'check_active' ) ) {
  function check_active ( $arr, $c ) {

    // Checks if active
    foreach ( $arr as $post ) {
      if ( $post ['url'] === $c ) {
        return true;
      } 
    }

    // Returns false
    return false;

  }
}

// Formats all da data
$planks_21mm = format ( $planks_21mm );
$planks_16mm = format ( $planks_16mm );
$parquets    = format ( $parquets );
$footboards  = format ( $footboards );

// Checks active
$planks_21mm_active = check_active ( $planks_21mm, $current_url );
$planks_16mm_active = check_active ( $planks_16mm, $current_url );
$parquets_active    = check_active ( $parquets, $current_url );
$footboards_active  = check_active ( $footboards, $current_url );

?>

<div class="types-menu">
  <div class="menu-elements">

    <!-- 21mm planks -->
    <?php $class_suffix = ( $planks_21mm_active ? 'active' : '' ); ?> 
    <div class="menu-element <?php echo $class_suffix ?>">
      <div class="parent">
        <svg viewBox="0 0 106 24" class="icon">
          <use xlink:href="#icon-21mm">
          </use>  
        </svg>

        <div class="text">
          21mm lamelplank
        </div>
      </div>

      <div class="children">
        <div class="children-inner">
          <?php foreach ( $planks_21mm as $post ) :

            // Extracts data
            $active = $post['url'] === $current_url;
            $class = "child " . ( $active ? 'active' : '' ); ?>

            <a href="<?php echo $post['url']; ?>" class="<?php echo $class; ?>">
              <?php echo $post['title']; ?>
            </a>
          
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- 16mm planks -->
    <?php $class_suffix = ( $planks_16mm_active ? 'active' : '' ); ?> 
    <div class="menu-element <?php echo $class_suffix ?>">
      <div class="parent">
        <svg viewBox="0 0 164 24" class="icon">
          <use xlink:href="#icon-16mm">
          </use>  
        </svg>

        <div class="text">
          16mm lamelplank
        </div>
      </div>

      <div class="children">
        <div class="children-inner">
          <?php foreach ( $planks_16mm as $post ) :

            // Extracts data
            $active = $post['url'] === $current_url;
            $class = "child " . ( $active ? 'active' : '' ); ?>

            <a href="<?php echo $post['url']; ?>" class="<?php echo $class; ?>">
              <?php echo $post['title']; ?>
            </a>
          
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Parquets -->
    <?php $class_suffix = ( $parquets_active ? 'active' : '' ); ?> 
    <div class="menu-element <?php echo $class_suffix ?>">
      <div class="parent">
        <svg viewBox="0 0 103 24" class="icon">
          <use xlink:href="#icon-parquet">
          </use>  
        </svg>

        <div class="text">
          Sildebensparket
        </div>
      </div>

      <div class="children">
        <div class="children-inner">
          <?php foreach ( $parquets as $post ) :

            // Extracts data
            $active = $post['url'] === $current_url;
            $class = "child " . ( $active ? 'active' : '' ); ?>

            <a href="<?php echo $post['url']; ?>" class="<?php echo $class; ?>">
              <?php echo $post['title']; ?>
            </a>
          
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Footboards -->
    <?php $class_suffix = ( $footboards_active ? 'active' : '' ); ?> 
    <div class="menu-element <?php echo $class_suffix ?>">
      <div class="parent">
        <svg viewBox="0 0 15 24" class="icon">
          <use xlink:href="#icon-foot">
          </use>  
        </svg>

        <div class="text">
          Fodlister
        </div>
      </div>

      <div class="children">
        <div class="children-inner">
          <?php foreach ( $footboards as $post ) :

            // Extracts data
            $active = $post['url'] === $current_url;
            $class = "child " . ( $active ? 'active' : '' ); ?>

            <a href="<?php echo $post['url']; ?>" class="<?php echo $class; ?>">
              <?php echo $post['title']; ?>
            </a>
          
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</div>