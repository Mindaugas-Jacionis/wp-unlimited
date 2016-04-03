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
		<meta name="google-site-verification" content="kAvUQZq5Qn-XzKjo-_H1C2wWu6Gd7vpqhsuBvB5dL1Y" />
		<title><?php bloginfo("name"); ?> <?php wp_title(); ?></title>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />
		<!-- CSS -->
		<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo("stylesheet_url"); ?>" rel="stylesheet" type="text/css" media="screen" />
		<!-- Javascript -->
		<?php if(is_page_template( "contacts-page.php" )): ?>
			<script src="https://maps.googleapis.com/maps/api/js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
		<?php endif; ?>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
			
		<!-- WP generated header -->
		<?php wp_head(); ?>
		<!-- End WP generated header -->
	</head>
	<body>
        <div class="container">
			<header class="site-header" role="banner">
				<a href="<?php bloginfo('url'); ?>" class="logo"><img alt="logo" src="<?php bloginfo("template_url"); ?>/img/logo.png" />
				<a href="<?php bloginfo('url'); ?>" class="website-name"><?php bloginfo("name"); ?></a>
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<div class="mobile-social">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div>
				<?php endif; ?>
			</header>
            <div class="main-content" role="main">
				<nav class="menu-container clearfix">
					<div class="mobile-menu"></div>
					<?php 
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'menu_class' => 'site-menu'
							)
						);
					?>
					
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<div class="social">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div>
					<?php endif; ?>
				</nav>