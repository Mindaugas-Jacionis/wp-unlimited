<?php
/*
* index.php
*
* The main template file.
*/
get_header(); ?>

<?php
    $newsfeedClass = 'full-width';
    $args = array( 'post_type' => 'dicounts', 'posts_per_page' => 3 );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        $newsfeedClass = 'shared-width';
    }
    wp_reset_postdata();
?>

    <div class="content-wrap <?php echo $newsfeedClass ?>">

        <?php
            $newsfeedClass = 'full-width';
            $args = array( 'post_type' => 'dicounts', 'posts_per_page' => 3 );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                $newsfeedClass = 'shared-width';
            }
            wp_reset_postdata();
        ?>

        <div class="homepage-newsfeed">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

            <?php alpha_paging_nav(); ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ) ?>
            <?php endif; ?>
        </div>

        <?php
            $args = array( 'post_type' => 'dicounts', 'posts_per_page' => 3 );
            $loop = new WP_Query( $args );
            $discountsArchyve = get_post_type_archive_link( 'dicounts' );
            if ( $loop->have_posts() ) {
                echo '<div class="discounts-wrapper">';
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    get_template_part( 'content', get_post_format() );
                }
                echo __('<div class="all-discounts-wrapper"><a class="all-discounts" href="' . $discountsArchyve . '">Visos nuolaidos</a></div>', 'alpha');
                echo '</div>';
            }
            wp_reset_postdata(); // reset to the original page data
        ?>


    </div> <!-- end main content -->

<?php get_footer(); ?>
