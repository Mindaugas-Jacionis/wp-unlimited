<?php
/**
* content.php 
*
* The default template to display content.
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Article header -->
	<header class="header.entry-header"> <div class="headerinfo"><?php
		// If the post has a thumbnail and it is not pasword protected
		// then display the thumbnail
		if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			<figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
		<?php endif;
		
		//If single page, display the title
		//Else, we display the title in a link
		if( is_single() ) : ?>
			<div class="titleDiv"><h1><?php the_title(); ?></h1><div>
		<?php else : ?>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>
		
	</div></header>
	
	<!-- Article content -->
	<div class="entry-content">
		<?php
		if ( is_search() ) {
			the_excerpt();
		} else {
			the_content( __( 'Continue reading &rarr;', 'alpha' ) );
			
			wp_link_pages();
		}
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