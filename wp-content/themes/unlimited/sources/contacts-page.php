<?php
/**
* contacts-page.php 
*
* Template Name: Contacts Page
*
* The default template to displaying gallery pages(headline excluded).
*/
get_header(); ?>
	<?php 
        $contactForm = get_field("contact_form");
		$mapCoordinates = get_field("map_coordinates");
		
		$addressHeadline = get_field("address_headline");
		$address = get_field("address");
		$phoneHeadline = get_field("phone_headline");
		$phone = get_field("phone");
		$emailHeadline = get_field("email_headline");
		$email = get_field("email");
		$workingTimeHeadline = get_field("working_time_headline");
		$workingTime = get_field("working_time");
	?>
	<div class="content-wrap">
		<?php if( !empty($mapCoordinates) ): ?>
		<div id="map-canvas" class="contact-map" data-coordinates="<?php echo $mapCoordinates ?>"></div>
		<?php endif; ?>
		<div class="content-bottom clearfix">
			<div class="contact-details">
				<?php if( !empty($addressHeadline) ): ?>
					<p class="contact-headline"><?php echo $addressHeadline ?></p>
				<?php endif; ?>
				<?php if( !empty($address) ): ?>
					<p class="contact-content"><?php echo $address ?></p>
				<?php endif; ?>
				<?php if( !empty($phoneHeadline) ): ?>
					<p class="contact-headline"><?php echo $phoneHeadline ?></p>
				<?php endif; ?>
				<?php if( !empty($phone) ): ?>
					<p class="contact-content"><?php echo $phone ?></p>
				<?php endif; ?>
				<?php if( !empty($emailHeadline) ): ?>
					<p class="contact-headline"><?php echo $emailHeadline ?></p>
				<?php endif; ?>
				<?php if( !empty($email) ): ?>
					<p class="contact-content"><?php echo $email ?></p>
				<?php endif; ?>
				<?php if( !empty($workingTimeHeadline) ): ?>
					<p class="contact-headline"><?php echo $workingTimeHeadline ?></p>
				<?php endif; ?>
				<?php if( !empty($workingTime) ): ?>
					<p class="contact-content"><?php echo $workingTime ?></p>
				<?php endif; ?>
			</div>
			<?php if( !empty($contactForm) ): ?>
				<div class="contact-form">
					<?php echo $contactForm; ?>
				</div>
			<?php endif; ?>
		</div>
	</div><!-- end content-wrap -->

<?php get_footer(); ?>