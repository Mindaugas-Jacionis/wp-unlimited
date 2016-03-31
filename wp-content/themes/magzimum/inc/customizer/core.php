<?php

add_filter( 'magzimum_filter_default_theme_options', 'magzimum_core_default_options' );

/**
 * Core defaults.
 *
 * @since  Magzimum 1.0
 */
if( ! function_exists( 'magzimum_core_default_options' ) ):

  function magzimum_core_default_options( $input ){

    $input['custom_css']         = '';
    $input['search_placeholder'] = __( 'Search...', 'magzimum' );

    return $input;
  }

endif;


add_filter( 'magzimum_theme_options_args', 'magzimum_core_theme_options_args' );


/**
 * Add core options.
 *
 * @since  Magzimum 1.0
 */
if( ! function_exists( 'magzimum_core_theme_options_args' ) ):

  function magzimum_core_theme_options_args( $args ){

    // Create theme option panel
    $args['panels']['theme_option_panel']['title'] = __( 'Themes Options', 'magzimum' );

    // Advance Section
    $args['panels']['theme_option_panel']['sections']['section_advanced'] = array(
      'title'    => __( 'Custom CSS', 'magzimum' ),
      'priority' => 1000,
      'fields'   => array(
        'custom_css' => array(
          'title'                => __( 'Custom CSS', 'magzimum' ),
          'type'                 => 'textarea',
          'sanitize_callback'    => 'wp_filter_nohtml_kses',
          'sanitize_js_callback' => 'wp_filter_nohtml_kses',
        ),
      )
    );

    // Search Section
    $args['panels']['theme_option_panel']['sections']['section_search'] = array(
      'title'    => __( 'Search', 'magzimum' ),
      'priority' => 70,
      'fields'   => array(
        'search_placeholder' => array(
          'title'             => __( 'Search Placeholder', 'magzimum' ),
          'type'              => 'text',
          'sanitize_callback' => 'sanitize_text_field',
        ),
      )
    );
    // Social Section
    $args['panels']['theme_option_panel']['sections']['section_social'] = array(
      'title'    => __( 'Social Icons', 'magzimum' ),
      'priority' => 90,
      'fields'   => array(
        'social_icons' => array(
          'title'       => __( 'Social Icons', 'magzimum' ),
          'type'        => 'message',
          'description' => __( 'Please assign social menu.', 'magzimum' ) . ' <a href="' . admin_url( 'customize.php' ).'?autofocus[section]=nav">'.__( 'Assign now', 'magzimum' ) . '</a>',
        ),
      )
    );

    return $args;
  }

endif;
