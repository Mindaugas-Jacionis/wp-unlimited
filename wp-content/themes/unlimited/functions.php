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

/**
 * ----------------------------------------------------------------------------------------
 * 6.0 - Display navigation to the next/previous set of posts
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'alpha_paging_nav' ) ) {
	function alpha_paging_nav() { ?>
		<div class="homepage-pagination">
			<?php 
				if ( get_previous_posts_link() ){
				    previous_posts_link( __( '<button class="next-page"><h4>Ankstesnis puslapis</h4></button>', 'alpha' ) );
				}else {
                    echo __("<button class='next-page inactive'><h4>Ankstesnis puslapis</h4></button>", "alpha");
                }
				if ( get_next_posts_link() ){
				    next_posts_link( __( '<button class="previous-button"><h4>Sekantis puslapis</h4></button>', 'alpha' ) );
                } else{
                    echo __("<button class='previous-page inactive'><h4>Sekantis puslapis</h4></button>", "alpha");
                }
			 ?>
			 
		</div>
		<?php
	}
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
                    'name' => 'Bottom Left',
                    'id' => 'sidebar-1',
                    'description' => 'Appears on all pages',
                    'before_widget' => '<!--start widget -->',
                    'after_widget' => '<!--end widget -->',
                    'before_title' => '<h2 class="widgets-title">',
                    'after_title' => '</h2>'
                )
            );
            register_sidebar(
                array(
                    'name' => 'Bottom Middle',
                    'id' => 'sidebar-2',
                    'description' => 'Appears on all pages',
                    'before_widget' => '<!--start widget -->',
                    'after_widget' => '<!--end widget -->',
                    'before_title' => '<h2 class="widget-title">',
                    'after_title' => '</h2>'
                )
            );
            register_sidebar(
                array(
                    'name' => 'Bottom Right',
                    'id' => 'sidebar-3',
                    'description' => 'Appears on all pages',
                    'before_widget' => '<!--start widget -->',
                    'after_widget' => '<!--end widget -->',
                    'before_title' => '<h2 class="widget-title">',
                    'after_title' => '</h2>'
                )
            );
            register_sidebar(
                array(
                    'name' => 'Slider',
                    'id' => 'sidebar-4',
                    'description' => 'Appears on all pages',
                    'before_widget' => '<!--start widget -->',
                    'after_widget' => '<!--end widget -->',
                    'before_title' => '<h2 class="widget-title">',
                    'after_title' => '</h2>'
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
//function custom_admin_css() {
//   echo '<style type="text/css">
//            #wp-admin-bar-comments{
//                display: none;
//            }
//            #wp-admin-bar-wp-logo{
//                display: none;
//            }
//             
//            #wp-admin-bar-new-content-default #wp-admin-bar-new-post{
//                display: none;
//            }
//            #dashboard_quick_press{
//                display: none;
//            }
//            #widget-1_akismet_widget-__i__{
//                display: none;
//            }
//             
//            .option-site-visibility{
//                display: none;
//            }
//        </style>';
//}
// 
//add_action('admin_head', 'custom_admin_css');
 
/*
*-------------------------------------------------------------------------------------------------------------------------------
* Remove unneeded widgets.
*-------------------------------------------------------------------------------------------------------------------------------
*/
//function jpb_unregister_widgets(){
//  unregister_widget('WP_Widget_Pages');
//  unregister_widget('WP_Widget_Calendar');
//  unregister_widget('WP_Widget_Archives');
//  unregister_widget('WP_Widget_Links');
//  unregister_widget('WP_Widget_Meta');
//  unregister_widget('WP_Widget_Search');
//  unregister_widget('WP_Widget_Text');
//  unregister_widget('WP_Widget_Categories');
//  unregister_widget('WP_Widget_Recent_Posts');
//  unregister_widget('WP_Widget_Recent_Comments');
//  unregister_widget('WP_Widget_RSS');
//  unregister_widget('WP_Widget_Tag_Cloud');
//  unregister_widget('WP_Nav_Menu_Widget');
//}
// 
//add_action( 'widgets_init', 'jpb_unregister_widgets' );
 
?>