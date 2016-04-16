<?php
/**
 * archive.php
 *
 * The template for displaying archive pages.
 */
?>

<?php get_header(); ?>

	<div class="archyve-page-content" role="main">
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts($query_string .'&posts_per_page=5&paged=' . $paged);

			if(have_posts()) : while(have_posts()) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			alpha_paging_nav();
			endif;
		?>
	</div> <!-- end main-content -->

<?php get_footer(); ?>
