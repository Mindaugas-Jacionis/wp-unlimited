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
