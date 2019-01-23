<?php

namespace Jitty\Plugin\Shortcode;

add_shortcode('prijslijst', function($atts){

  //TODO: serialize this the right way
  $post_id = isset($atts['post_id']) ? $atts['post_id'] : NULL ;

  // Check if num
  if( empty($post_id) ):

    include "../templates/prijslijst-alert.php";

  else:

    include "../templates/prijslijst-wrapper.php";

  endif;
});
