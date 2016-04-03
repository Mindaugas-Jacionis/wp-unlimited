<?php
/**
* single.php 
*
* The default template to displaying all single posts.
*/
?>
<?php get_header(); ?>
	<div class="content-wrap">
		<?php while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ) ?>
		<?php endwhile; ?>
	</div><!-- end main-content -->
<?php get_footer(); ?>