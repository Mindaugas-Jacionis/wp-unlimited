<?php 
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
?>
			</div> <!-- end main content -->
			<footer>
                <div class="footer-top">
                    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<div class="footer-block">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div>
				    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
						<div class="footer-block">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
				    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
						<div class="footer-block">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div>
				    <?php endif; ?>
                </div>
				<div class="footer-bottom">
                    All rights reserved © 2016. Solution by <a href="http://heroofweb.com" target="_blank">Hero of Web</a> & <a href="https://www.linkedin.com/in/ruta-racaite-796107b6" target="_blank">RR</a>
                </div>
			</footer>
        </div>
        <!-- Javascript -->
		<?php if(is_page_template( "contacts-page.php" )): ?>
			<script src="https://maps.googleapis.com/maps/api/js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
		<?php endif; ?>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>