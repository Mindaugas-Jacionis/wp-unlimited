<?php
/**
* content-link.php 
*
* The default template for displaying posts with the Link post format.
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	
	<!-- Article content -->
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading &rarr;', 'alpha' ) );
			
			wp_link_pages();
		?>
	</div> <!-- end entry-content -->
	
	<!-- Article footer -->
	<footer class="entry-footer">
		<?php
			//If we have single page and author biography exists, display it
			if( is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Writen by ', 'alpha' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer>
</article>