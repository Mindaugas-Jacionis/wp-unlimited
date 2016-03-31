<?php

/**
 * Add custom CSS
 *
 * @since  Magzimum 1.0
 */

if( ! function_exists( 'magzimum_add_custom_css' ) ) :

  function magzimum_add_custom_css(){

    $custom_css = magzimum_get_option( 'custom_css' );
    $output = '';
    if ( ! empty( $custom_css ) ) {
      $output = "\n" . '<style type="text/css">' . "\n";
      $output .= esc_textarea( $custom_css ) ;
      $output .= "\n" . '</style>' . "\n" ;
    }
    echo $output;

  }

endif;
add_action( 'wp_head', 'magzimum_add_custom_css' );

