<?php
/**
* page.php 
*
* The default template to displaying all pages.
*/
get_header(); ?>
	<div class="content-wrap">
		<?php while( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- Article no headline -->
                
				<!-- Article content -->
				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div> <!-- end entry-content -->
				
				<!-- Article footer -->
				<footer class="entry-footer">
					<?php
						//Edit link.
						if( is_user_logged_in() ){
							echo '<p>';
							edit_post_link( __( 'Edit', 'alpha' ), '<span class="meta-edit">', '</span>' );
							echo '</p>';
						}
					?>
				</footer>
			</article>
		<?php endwhile; ?>
	</div><!-- end content-wrap -->

<?php get_footer(); ?>