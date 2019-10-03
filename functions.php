<?php

define( 'B2R_VERSION', '1.0.0' );

add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/assets/css/style.css', array('sp-core-style'), B2R_VERSION );

});

add_shortcode( 'b2r_icons', function( $atts ){
  ob_start();

  $icons = array(
    'fb'  => array(
      'link'  => '',
      'icon'  => 'fa fa-facebook'
    ),
    'tw'  => array(
      'link'  => '',
      'icon'  => 'fa fa-twitter'
    ),
    'ig'  => array(
      'link'  => '',
      'icon'  => 'fa fa-instagram'
    ),
    'ytube'  => array(
      'link'  => '',
      'icon'  => 'fa fa-youtube'
    ),

  );

  _e( "<ul class='list-inline social-icons'>" );
  foreach( $icons as $icon ){
    _e( "<li>" );
    _e( "<a href='".$icon['link']."'>" );
    _e( "<i class='".$icon['icon']."'></i>" );
    _e( "</a>" );
    _e( "</li>" );
  }
  _e( "</ul>" );
  return ob_get_clean();
} );
