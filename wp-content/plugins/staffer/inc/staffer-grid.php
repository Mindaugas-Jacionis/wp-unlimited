<?php // staffer grid template

$stafferoptions = get_option('staffer');

// checks the post per page option
//if ( $stafferoptions['perpage'] != null ) {
	//$postsperpage = $stafferoptions['perpage'];
//}
//else {
	//$postsperpage = 9;
//}
				//	$args = array ( 
					//	'post_type' => 'staff',
					//	'pagination'	=> true,
					//	'posts_per_page' => $postsperpage, 
					//	'paged' => $paged
					//	);
					//$the_query = new WP_Query( $args );
					
			if (have_posts() ) : ?>
			
			<ul class="staffer-archive-grid">
			<?php while ( have_posts() ) : ?>
                <?php the_post(); ?>
                <li class="staffer-list-el">
                    <div class="staff-content">
                        <?php
                            if ( has_post_thumbnail() ) { 
                                the_post_thumbnail ( 'medium', array ('class' => 'alignleft') ); 
                        ?>

                        <h3 class="staffer-staff-title"><?php echo the_title(); ?></h3>
                        <?php
                            if ( get_post_meta ($post->ID,'staffer_staff_title', true) != '' ) {
                               echo '<em class="job-title">';
                               echo get_post_meta ($post->ID,'staffer_staff_title', true) . '</em>';
                            }else echo '<em class="empty-job-title"></em>'
                        ?>
                        <?php
                           }
                            if ($stafferoptions['estyle'] == null or $stafferoptions['estyle'] == 'excerpt' ) {
                                the_excerpt();
                            } elseif ($stafferoptions['estyle'] == 'full' ) {
                                the_content();
                            } elseif ($stafferoptions['estyle'] == 'none' ) {
                                // nothing to see here
                            } 
                            ?>
                    </div>
                </li>
			<?php endwhile;
			endif; ?>
			</ul>