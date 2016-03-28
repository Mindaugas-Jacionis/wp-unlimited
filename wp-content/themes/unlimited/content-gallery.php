<?php
/**
* content-gallery.php 
*
* The default template for displaying posts with the Gallery post format.
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Article header none-->
	
	<!-- Article content -->
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading &rarr;', 'alpha' ) );
			wp_link_pages();
		?>
	</div> <!-- end entry-content -->
	
	<!-- Article footer none -->
</article>