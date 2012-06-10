<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>


<!-- __________________________________________________ Start Middle -->
				<section id="middle">

<!-- __________________________________________________ Start Top -->
					<section id="top">
						<ul id="slider" class="responsiveSlider">
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/img/slide_1.jpg" alt="" class="slide-image" />
								<div class="slideCaption">
									<div class="slideCaptionInner">
										<a style="float:right; margin:6px 0 0;" href="#" class="button_medium"><span>Click Here</span></a>
										<h2 style="margin:0;">There's a Better Way To Send Specs</h2>
										<p style="padding:0;">Save your customer's inbox and deliver a more professional aircraft presentation</p>
									</div>
								</div>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/img/slide_2.jpg" alt="" class="slide-image" />
								<div class="slideCaption">
									<div class="slideCaptionInner">
										<h2 style="margin:0;">Track Who is Watching Your Aircraft</h2>
										<p style="padding:0;">See real-time activity stats to anticipate a buyer's decision process</p>
									</div>
								</div>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/img/slide_3.jpg" alt="" class="slide-image" />
								<div class="slideCaption">
									<div class="slideCaptionInner">
										<a style="float:right; margin:6px 0 0;" href="#" class="button_medium"><span>Click Here</span></a>
										<h2 style="margin:0;">Never Miss a Deal. Heads Up Info on The Go</h2>
										<p style="padding:0;">At the office, at the jet or on the move, you'll never overlook a potential sale again.</p>
									</div>
								</div>
							</li>
						</ul>
					</section>
<!-- __________________________________________________ Finish Top -->


<!-- __________________________________________________ Start Content -->
					<section id="middle_content">
						<div class="entry">
							<p>&nbsp;</p>
							<h1 class="aligncenter" style="font-size:30px;">
							Hello, this is <span class="color_3">JetDeck</span>,
							an Aircraft Sales Professional's <br /> weapon to act faster,
							be organized and close more deals.</h1>
							<p>&nbsp;</p>
							<div class="cl"></div>
							<section class="post_type_shortcode">
								<h4 class="cms_title">How It Works <span class="widget_navi"><a href="#" class="cmsms_content_prev_slide"></a><a href="#" class="cmsms_content_next_slide"></a></span></h4>
								<script type="text/javascript">
									jQuery(document).ready(function () {
										jQuery('.post_type_list').cmsmsResponsiveContentSlider( {
											sliderWidth : '100%',
											sliderHeight : 'auto',
											animationSpeed : 500,
											animationEffect : 'slide',
											animationEasing : 'easeInOutExpo',
											pauseTime : 0,
											activeSlide : 1,
											touchControls : true,
											pauseOnHover : false,
											arrowNavigation : true,
											slidesNavigation : false
										} );
									} );
								</script>
								<ul class="post_type_list portfolio_container responsiveContentSlider">
									<li class="latest_item">
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="#" class="preloader" title="">
														<img src="<?php echo get_template_directory_uri(); ?>/images/img/fproject_1_1.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="#">Engage Customers</a></h4>
												</header>
												<div class="entry-content">
													<p>JetDeck allows brokers to send more specs, and do it quickly</p>
												</div>

											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="#" class="preloader" title="">
														<img src="<?php echo get_template_directory_uri(); ?>/images/img/fproject_1_2.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="#">Look Professional</a></h4>
												</header>
												<div class="entry-content">
													<p>Buyers always see up-to-date numbers and an impressive presentation</p>
												</div>

											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="#" class="preloader" title="">
														<img src="<?php echo get_template_directory_uri(); ?>/images/img/fproject_1_3.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="#">Monitor Activity</a></h4>
												</header>
												<div class="entry-content">
													<p>Know when and how often a buyer views your aircraft spec</p>
												</div>

											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="#" class="preloader" title="">
														<img src="<?php echo get_template_directory_uri(); ?>/images/img/fproject_1_4.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="#">Close Deals</a></h4>
												</header>
												<div class="entry-content">
													<p>Think strategically and act tactically</p>
												</div>

											</article>
										</div>
									</li>
								</ul>
							</section>
							<div class="cl"></div>
						</div>
					</section>
<!-- __________________________________________________ Finish Content -->

<!-- __________________________________________________ Start Middle Sidebar -->

<!-- __________________________________________________ Finish Middle Sidebar -->

				</section>
<!-- __________________________________________________ Finish Middle -->


<?php get_footer(); ?>
