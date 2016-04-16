<?php
/**
* services.php
*
* Template Name: Services
*
* The default template to displaying all pages without headings.
*/
get_header(); ?>

<?php
    $cardPicture1 = get_field("cardPicture1");
	$cardPicture2 = get_field("cardPicture2");

	$cardName1 = get_field("cardName1");
	$cardName2 = get_field("cardName2");
	$aboutCard1 = get_field("aboutCard1");
	$aboutCard2 = get_field("aboutCard2");

    //$cardPosition1 = get_field("cardPosition1");
    //$cardPosition2 = get_field("cardPosition2");
?>

	<div class="content-wrap services-page">
        <!-- Article headline -->
        <h1 class="page-headline"><?php the_title(); ?></h1>

        <!-- Posts -->
            <?php
                $args = array( 'post_type' => 'service', 'posts_per_page' => 999 );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    echo '<div class="services-wrapper">';
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        get_template_part( 'content-service', get_post_format() );
                    }
                    echo '</div>';
                }
                wp_reset_postdata(); // reset to the original page data
            ?>
        <!-- end Posts -->
	</div><!-- end content-wrap -->

<?php get_footer(); ?>
