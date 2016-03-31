<?php
/**
 * Magzimum Theme Customizer
 *
 * @package Magzimum
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function magzimum_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'magzimum_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function magzimum_customize_preview_js() {
	wp_enqueue_script( 'magzimum_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'magzimum_customize_preview_js' );


if( ! function_exists( 'magzimum_customizer_script' ) ) :

  /**
   * Custom customizer script
   *
   * @since  Magzimum 1.0
   */
  function magzimum_customizer_script( $hook ){

    $screen = get_current_screen();

    if ( 'customize' != $screen->id ) {
      return;
    }

    wp_enqueue_script(
          'custom-customizer-script',      //Give the script an ID
          get_template_directory_uri() . '/assets/js/custom-customizer.js',//Point to file
          array( 'jquery' ),  //Define dependencies
          '',           //Define a version (optional)
          true            //Put script in footer?
      );

    $magzimum_misc_links = array(
      'upgrade_link'        => esc_url( 'http://themepalace.com/shop/wordpress-themes/magzimum-pro/' ),
      'upgrade_text'        => __( 'Upgrade To Pro &raquo;', 'magzimum' ),
      'WP_version'          => get_bloginfo( 'version' ),
      'old_version_message' => __( 'Some settings might be missing or disorganized in this version of WordPress. So we suggest you to upgrade to version 4.0 or better.', 'magzimum' )
    );

    //Add Upgrade Button and old WordPress message via localized script
    wp_localize_script( 'custom-customizer-script', 'magzimum_misc_links', $magzimum_misc_links );

    wp_enqueue_style(
      'custom-customizer-style',      //Give the script an ID
      get_template_directory_uri() . '/assets/css/customizer.css'//Point to file
    );

  }
endif;

add_action( 'admin_enqueue_scripts', 'magzimum_customizer_script' );
