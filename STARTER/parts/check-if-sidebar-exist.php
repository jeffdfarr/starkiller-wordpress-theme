<?php
  // Display a suitable column layout depending on whether sidebar exists
  if ( is_active_sidebar( 'sidebar-widgets' ) ) :
    echo '<div class="small-12 large-8 columns page-container" role="main">';

  else :
    echo '<div class="small-12 columns page-container" role="main">';
  endif;
?>
