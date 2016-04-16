<?php
/**
* content-video.php
*
* The default template for displaying posts with the Video post format.
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Article header -->
	<header class="header.entry-header"> <?php
		//If single page, display the title
		//Else, we display the title in a link
		if( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>

	</header>

	<!-- Article content -->
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading &rarr;', 'alpha' ) );
			wp_link_pages();
		?>
	</div> <!-- end entry-content -->
	
</article>
