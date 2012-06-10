<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

<!-- __________________________________________________ Start Bottom -->
				<section id="bottom">
					<div class="bottom_inner">
						<div class="one_fourth">
							<aside class="widget widget_custom_portfolio_entries">
								<h4 class="widgettitle">Try JetDeck Now! </h4>
							</aside>
						</div>
					</div>
				</section>
<!-- __________________________________________________ Finish Bottom -->
			</div>
		</section>
<!-- __________________________________________________ Finish Page -->


<!-- __________________________________________________ Start Footer -->
		<footer id="footer">
			<div class="footer_inner">
				<span>JetDeck &copy; 2012 All rights reserved</span>
			</div>
		</footer>
<!-- __________________________________________________ Finish Footer -->

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.script.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validationEngine-lang.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validationEngine.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jtweetsanywhere.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cmsmsResponsiveSlider.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(document).ready(function () {
				jQuery('#slider').cmsmsResponsiveSlider( {
					animationSpeed : 500,
					animationEffect : 'slide',
					animationEasing : 'easeInOutExpo',
					pauseTime : 5000,
					activeSlide : 1,
					buttonControls : true,
					touchControls : true,
					pauseOnHover : false,
					showCaptions : true,
					arrowNavigation : false,
					arrowNavigationHover : false,
					slidesNavigation : true,
					slidesNavigationHover : false,
					showTimer : true,
					timerHover : false
				} );
			} );
		</script>

<?php wp_footer(); ?>

</body>
</html>
