<?php
/**
* functions.php
*
* The theme's functions and definitions
*/


/**
*---------------------------------------------------------------------------------------------------------------------------
* Set up the theme default and register various supported features
*---------------------------------------------------------------------------------------------------------------------------
*/
if ( ! function_exists( 'alpha_setup' )){
	function alpha_setup(){
		
		/**
		* Add support for post formats
		*/
		add_theme_support( 'post-formats', 
			array(
				'gallery',
				'link',
				'image',
				'quote',
				'video',
				'audio'
			)
		);

		/**
		* Add support for automatic feed links
		*/
		add_theme_support( 'automatic-feed-links' );

		/**
		* Add support for post thumbnails
		*/
		add_theme_support( 'post-thumbnails' );

		/**
		* Register nav menus
		*/
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'alpha' )
			)
		);
	}
	add_action( 'after_setup_theme', 'alpha_setup' );
}

/*
*-------------------------------------------------------------------------------------------------------------------------------
* Register our sidebars and widgetized areas.
*-------------------------------------------------------------------------------------------------------------------------------
*/
if ( ! function_exists( 'alpha_widget_init' ) ) {
	function alpha_widget_init() {
		if( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
				array(
					'name' => 'Socials',
					'id' => 'sidebar-1',
					'description' => 'Appears on all pages',
					'before_widget' => '<!--start widget --><div class="social-link">',
					'after_widget' => '</div><!--end widget -->',
					'before_title' => '<span class="hidden">',
					'after_title' => '</span>'
				)
			);
		}
	}
	
	add_action( 'widgets_init', 'alpha_widget_init' );
}

/*
*-------------------------------------------------------------------------------------------------------------------------------
* Add custom CSS to Admin dashboard.
*-------------------------------------------------------------------------------------------------------------------------------
*/
function custom_admin_css() {
   echo '<style type="text/css">
			#wp-admin-bar-comments{
				display: none;
			}
			#wp-admin-bar-wp-logo{
				display: none;
			}
			
			#wp-admin-bar-new-content-default #wp-admin-bar-new-post{
				display: none;
			}
			#dashboard_quick_press{
				display: none;
			}
			#widget-1_akismet_widget-__i__{
				display: none;
			}
			
			.option-site-visibility{
				display: none;
			}
			.update-nag{
				display: none;	
			}
			.wp-admin-bar-updates{
				display: none;	
			}
		</style>';
}

add_action('admin_head', 'custom_admin_css');

/*
*-------------------------------------------------------------------------------------------------------------------------------
* Remove unneeded widgets.
*-------------------------------------------------------------------------------------------------------------------------------
*/
function jpb_unregister_widgets(){
  unregister_widget('WP_Widget_Pages');
  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Archives');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Search');
  unregister_widget('WP_Widget_Text');
  unregister_widget('WP_Widget_Categories');
  unregister_widget('WP_Widget_Recent_Posts');
  unregister_widget('WP_Widget_Recent_Comments');
  unregister_widget('WP_Widget_RSS');
  unregister_widget('WP_Widget_Tag_Cloud');
  unregister_widget('WP_Nav_Menu_Widget');
}

add_action( 'widgets_init', 'jpb_unregister_widgets' );

?>