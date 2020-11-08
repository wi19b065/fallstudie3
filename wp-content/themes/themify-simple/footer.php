<?php
/**
 * Template for site footer
 * @package themify
 * @since 1.0.0
 */
?>   
    <!-- /#layout -->
    <?php themify_layout_after(); // hook ?>
    </div>
    <!-- /body -->

			<div id="footerwrap">

				<?php themify_footer_before(); // hook ?>

				<footer id="footer" class="pagewidth">

					<?php themify_footer_start(); // hook ?>

					<div class="back-top clearfix">
                        <div class="arrow-up"><a href="#header"></a></div>
                    </div>

                    <?php get_template_part( 'includes/footer-widgets' ); ?>

					<?php 
						themify_menu_nav( array(
							'theme_location' => 'footer-nav',
							'fallback_cb' => '',
							'container'  => '',
							'menu_id' => 'footer-nav',
							'menu_class' => 'footer-nav',
						) );
					?>

					<?php if ( is_active_sidebar( 'footer-social-widget' ) ) : ?>
						<div class="footer-social-widgets">
							<?php dynamic_sidebar( 'footer-social-widget' ); ?>
						</div>
						<!-- /.footer-social-widgets -->
					<?php endif; ?>

					<div class="footer-text clearfix">
						<?php themify_the_footer_text(); ?>
						<?php themify_the_footer_text('right'); ?>
					</div>
					<!-- /footer-text -->

					<?php themify_footer_end(); // hook ?>

				</footer>
				<!-- /#footer -->

				<?php themify_footer_after(); // hook ?>

			</div>
			<!-- /#footerwrap -->

		</div>
		<!-- /#pagewrap -->
        <?php themify_body_end(); // hook ?>
        <!-- wp_footer -->
		<?php wp_footer(); ?>
		
	</body>
</html>
