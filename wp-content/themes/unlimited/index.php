<?php
/*
* index.php
*
* The main template file.
*/
get_header(); ?>

    <div class="content-wrap">
        
        <div class="homepage-newsfeed">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
            
            <?php alpha_paging_nav(); ?>
            
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ) ?>
            <?php endif; ?>
        </div>
        <div class="homepage-special-offers"></div>
    </div> <!-- end main content -->      
	   
<?php get_footer(); ?>