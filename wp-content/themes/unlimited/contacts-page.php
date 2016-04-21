<?php
/**
* noheading-page.php
*
* Template Name: Contacts
*
* Contacts page template to display contact detail.
*/
get_header(); ?>
	<?php
        $contactForm = get_field("contact_form");
	?>
	<div class="content-wrap">
		<h1 class="page-headline"><?php the_title(); ?></h1>
		<div class="contacts-list">
			<?php
	            $args = array( 'post_type' => 'location', 'posts_per_page' => 1000 );
	            $loop = new WP_Query( $args );
	            if ( $loop->have_posts() ) {
	                while ( $loop->have_posts() ) {
	                    $loop->the_post();
	                    get_template_part( 'content-contact', get_post_format() );
	                }
	            }
	            wp_reset_postdata(); // reset to the original page data
	        ?>
		</div>
		<div class="content-bottom">
			<?php if( !empty($contactForm) ): ?>
				<div class="contact-form">
					<?php echo $contactForm; ?>
				</div>
			<?php endif; ?>
		</div>
	</div><!-- end content-wrap -->

<?php get_footer(); ?>
