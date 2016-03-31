<?php
if( ! function_exists( 'magzimum_add_custom_icons' ) ) :

  /**
   * Add icons
   *
   * @since  Magzimum 1.0
   */
  function magzimum_add_custom_icons(){

    $site_favicon       = magzimum_get_option( 'site_favicon' );
    $site_web_clip_icon = magzimum_get_option( 'site_web_clip_icon' );

    if ( ! empty( $site_favicon ) ) {
      echo '<link rel="shortcut icon" href="'.esc_url( $site_favicon ).'" type="image/x-icon" />';
    }
    if ( ! empty( $site_web_clip_icon ) ) {
      echo '<link rel="apple-touch-icon-precomposed" href="'.esc_url( $site_web_clip_icon ).'" />';
    }

  }

endif;
add_action( 'wp_head', 'magzimum_add_custom_icons' );
add_action( 'admin_head', 'magzimum_add_custom_icons' );

