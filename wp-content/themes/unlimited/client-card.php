<?php
/**
* noheading-page.php
*
* Template Name: Client Card
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

	<div class="content-wrap client-cards-page">
		<?php while( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- Article headline -->
				<h1 class="page-headline"><?php the_title(); ?></h1>

				<!-- Article content -->
				<div class="entry-content client-cards-list">
					<?php if( !empty($cardPicture1) || !empty($cardName1) || !empty($aboutCard1)): ?>
                        <div class="client-card client-card-1">
                            <?php if( !empty($cardName1)): ?>
                                <h2 class="client-card-name"><?php echo $cardName1 ?></h2>
                            <?php endif; ?>
                            <?php if( !empty($cardPicture1)): ?>
                                <img class="client-card-img" src="<?php echo $cardPicture1['url']; ?>" alt="<?php echo $cardPicture1['alt']; ?>" />
                            <?php endif; ?>
                            <?php if( !empty($aboutCard1)): ?>
                                <div class='client-card-about'>
                                    <?php echo $aboutCard1 ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if( !empty($cardPicture2) || !empty($cardName2) || !empty($aboutCard2)): ?>
                        <div class="client-card client-card-2">
                            <?php if( !empty($cardName2)): ?>
                                <h2 class="client-card-name"><?php echo $cardName2 ?></h2>
                            <?php endif; ?>
                            <?php if( !empty($cardPicture2)): ?>
                                <img class="client-card-img" src="<?php echo $cardPicture2['url']; ?>" alt="<?php echo $cardPicture2['alt']; ?>" />
                            <?php endif; ?>
                            <?php if( !empty($aboutCard2)): ?>
                                <div class='client-card-about'>
                                    <?php echo $aboutCard2 ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
				</div> <!-- end entry-content -->

				<!-- Article footer -->
				<footer class="entry-footer">
					<?php
						//Edit link.
						if( is_user_logged_in() ){
							echo '<p>';
							edit_post_link( __( 'Edit', 'alpha' ), '<span class="meta-edit">', '</span>' );
							echo '</p>';
						}
					?>
				</footer>
			</article>
		<?php endwhile; ?>
	</div><!-- end content-wrap -->

<?php get_footer(); ?>
