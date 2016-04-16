<?php
/**
* content-servicese-list-element.php
*
* The default template for displaying service in services list page.
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        $servicePrice = get_field("price");
    ?>
    <!-- Article header -->
    <div class="servie-and-price">
        <p>
            <a href="<?php the_permalink(); ?>" rel="bookmark" class="clearfix">
                <?php the_title(); ?> <span class="price"><?php echo $servicePrice; ?></span>
            </a>
        </p>
	</div>
</article>
