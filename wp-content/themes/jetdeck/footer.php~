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
								<h4 class="widgettitle">Latest works </h4>
								<script type="text/javascript">
									jQuery(document).ready(function () {
										jQuery('.widget_custom_portfolio_entries_slides').cmsmsResponsiveContentSlider( {
											sliderWidth : '100%',
											sliderHeight : 'auto',
											animationSpeed : 500,
											animationEffect : 'slide',
											animationEasing : 'easeInOutExpo',
											pauseTime : 5000,
											activeSlide : 1,
											touchControls : true,
											pauseOnHover : false,
											arrowNavigation : false,
											slidesNavigation : true
										} );
									} );
								</script>
								<div class="widget_custom_portfolio_entries_container">
									<ul class="widget_custom_portfolio_entries_slides responsiveContentSlider">
										<li>
											<h6><a href="album_four.html">Fully responsive</a></h6>
											<img class="fullwidth middle_img_radius" src="images/img/fproject_4_1.jpg" alt="" />
										</li>
										<li>
											<h6><a href="album_four.html">Easy to customize</a></h6>
											<img class="fullwidth middle_img_radius" src="images/img/fproject_4_2.jpg" alt="" />
										</li>
										<li>
											<h6><a href="album_four.html">SEO optimised</a></h6>
											<img class="fullwidth middle_img_radius" src="<?php echo get_template_directory_uri(); ?>/images/img/fproject_4_4.jpg" alt="" />
										</li>
									</ul>
								</div>
							</aside>
						</div>
						<div class="one_fourth">
							<aside class="widget widget_custom_comments_entries">
								<h4 class="widgettitle">Comments</h4>
								<ul>
									<li>
										admin on <a href="openpost.html#comments">Standard post</a><br /> Duis semper nunc id metus sagittis nec ullamcorper justo consequat.
									</li>
									<li>
										admin on <a href="openpost.html#comments">Standard post</a><br /> Duis semper nunc id metus sagittis nec ullamcorper justo consequat.
									</li>
									<li>
										admin on <a href="openpost.html#comments">Standard post</a><br /> Duis semper nunc id metus sagittis nec ullamcorper justo consequat.
									</li>
								</ul>
							</aside>
						</div>
						<div class="one_fourth">
							<aside class="widget widget_links">
								<h4 class="widgettitle">Quick links</h4>
								<ul>
									<li><a href="#">Header Constructor</a></li>
									<li><a href="#">Slider Manager</a></li>
									<li><a href="#">Style settings</a></li>
									<li><a href="#">Fonts manager</a></li>
									<li><a href="#">Export styles</a></li>
									<li><a href="#">Contact Form Builder</a></li>
									<li><a href="#">Portfolio Projects</a></li>
									<li><a href="#">SEO friendly</a></li>
								</ul>
							</aside>
						</div>
						<div class="one_fourth">
							<aside class="widget widget_custom_contact_form_entries">
								<h4 class="widgettitle">Contact Us</h4>
								<div class="cmsms-form-builder">
									<div class="widgetinfo">Thank you! <br />Your message has been sent successfully.</div>
									<script type="text/javascript">
										jQuery(document).ready(function () {
											jQuery('#form_contact_form_widget_001').validationEngine('init');

											jQuery('#form_contact_form_widget_001 a#contact_form_widget_001_wformsend').click(function () {
												var form_builder_url = jQuery('#contact_form_widget_001_wurl').val();

												jQuery('#form_contact_form_widget_001 .loading').animate( {
													opacity : 1
												} , 250);

												if (jQuery('#form_contact_form_widget_001').validationEngine('validate')) {
													jQuery.post(form_builder_url, {
														field_003 : jQuery('#field_003').val(),
														field_004 : jQuery('#field_004').val(),
														formname : 'contact_form_widget_001',
														formtype : 'widget'
													}, function () {
														jQuery('#form_contact_form_widget_001 .loading').animate( { opacity : 0 }, 250);
														document.getElementById('form_contact_form_widget_001').reset();
														jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').hide();
														jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').fadeIn('fast');
														jQuery('html, body').animate( { scrollTop : (jQuery('#form_contact_form_widget_001').offset().top - 100) }, 'slow');
														jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').delay(5000).fadeOut(1000);
													} );

													return false;
												} else {
													jQuery('#form_contact_form_widget_001 .loading').animate( { opacity : 0 }, 250);

													return false;
												}
											} );
										} );
									</script>
									<form action="#" method="post" id="form_contact_form_widget_001">
										<div class="form_info cmsms_input">
											<label for="field_003">Email<span class="color_3"> *</span></label>
											<input type="text" name="wemail" id="field_003" size="22" tabindex="12" class="validate[required,custom[email]]" />
										</div>
										<div class="form_info cmsms_textarea">
											<label for="field_004">Message<span class="color_3"> *</span></label>
											<textarea name="wmessage" id="field_004" cols="28" rows="6" tabindex="13" class="validate[required,minSize[3]]"></textarea>
										</div>
										<div class="loading"></div>
										<div><input type="hidden" name="contact_form_widget_001_wurl" id="contact_form_widget_001_wurl" value="http://www.yoursite.net/php/sendmail.php" /></div><!-- Here you need to set the path to the sendmail file -->
										<div><a href="#" id="contact_form_widget_001_wformsend" class="button" tabindex="14"><span>Submit</span></a></div>
									</form>
								</div>
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
