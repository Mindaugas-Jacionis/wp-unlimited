<?php
/**
 * @package Magzimum
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php magzimum_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

  <?php
    $archive_layout =  magzimum_get_option( 'archive_layout' );
   ?>
   <?php
    if ( 'excerpt-thumb' == $archive_layout  ) {
      ?>
    	<div class="entry-summary">
        <?php if ( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail( 'large', array( 'class' => 'aligncenter' ) ); ?>
        <?php endif ?>
        <?php the_excerpt(); ?>
      </div><!-- .entry-summary -->
      <?php
    }
    else{
      ?>
      <div class="entry-content">
        <?php if ( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail( 'large', array( 'class' => 'aligncenter' )); ?>
        <?php endif ?>
    		<?php
    			/* translators: %s: Name of current post */
    			the_content( sprintf(
    				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'magzimum' ),
    				the_title( '<span class="screen-reader-text">"', '"</span>', false )
    			) );
    		?>

    		<?php
    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'magzimum' ),
    				'after'  => '</div>',
    			) );
    		?>
    	</div><!-- .entry-content -->

      <?php
    }
   ?>

	<footer class="entry-footer">
		<?php magzimum_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
