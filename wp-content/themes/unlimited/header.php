<?php
/**
* header.php
*
* The header for the theme
*/
?>

<!DOCTYPE html>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php bloginfo("name"); ?> <?php wp_title(); ?></title>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />
		<!-- CSS -->
        <link href="<?php bloginfo('template_directory'); ?>/css/reset.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo("stylesheet_url"); ?>" rel="stylesheet" type="text/css" media="screen" />
			
		<!-- WP generated header -->
		<?php wp_head(); ?>
		<!-- End WP generated header -->
	</head>
	<body>
        <div class="container">
			<header>
                <div class="logo-container">
				    <a href="<?php bloginfo('url'); ?>" class="logo">
                        <img alt="logo" src="<?php bloginfo("template_url"); ?>/img/logo.jpg" />
                    </a>
                </div>
                <nav class="menu-wrapp">
                    <?php 
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'menu_class' => 'menu'
							)
						);
					?>
                </nav>
			</header>
            <div class="main-content" role="main">
				