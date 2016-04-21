<?php
/**
* content-contact.php
*
* The default template for displaying service in services list page.
*/
?>
<?php
    $location_title = get_field("location_title");
    $google_maps_coordinates = get_field("google_maps_coordinates");
    $address = get_field("address");
    $phone_number = get_field("phone_number");
    $email = get_field("email");
    $timetable = get_field("timetable");
?>
<div id="post-<?php the_ID(); ?>" class="location" data-coordinates="<?php echo $google_maps_coordinates; ?>">
    <div class="title">
        <?php the_title(); ?>
    </div>
    <div class="location-content">
        <?php if( !empty($address) ): ?>
        <div class="address">
            <?php echo __('<p class="headline-text">Adresas</p>', 'alpha'); ?>
            <p class="content-text"><?php echo $address; ?></p>
        </div>
        <?php endif; ?>
        <?php if( !empty($phone_number) ): ?>
        <div class="phone">
            <?php echo __('<p class="headline-text">Telefonas</p>', 'alpha'); ?>
            <p class="content-text"><?php echo $phone_number; ?></p>
        </div>
        <?php endif; ?>
        <?php if( !empty($email) ): ?>
        <div class="email">
            <?php echo __('<p class="headline-text">E.paštas</p>', 'alpha'); ?>
            <p class="content-text"><?php echo $email; ?></p>
        </div>
        <?php endif; ?>
        <?php if( !empty($timetable) ): ?>
        <div class="timetable">
            <?php echo __('<p class="headline-text">Darbo laikas</p>', 'alpha'); ?>
            <div class="content-text"><?php echo $timetable; ?></div>
        </div>
    <?php endif; ?>
    </div>
</div>
