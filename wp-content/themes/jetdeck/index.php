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
								<img src="images/img/slide_1.jpg" alt="" class="slide-image" />
								<div class="slideCaption">
									<div class="slideCaptionInner">
										<a style="float:right; margin:6px 0 0;" href="#" class="button_medium"><span>Click Here</span></a>
										<h2 style="margin:0;">Too big to stay unnoticed</h2>
										<p style="padding:0;">Cum sociis natoque penatibus et magnis dis parturient montesnascetur ridiculus mus. Pellentesque tristique!</p>
									</div>
								</div>
							</li>
							<li data-video="http://www.youtube.com/watch?v=BCr7y4SLhck">
								<img src="images/img/slide_2.jpg" alt="" class="slide-image" />
								<div class="slideCaption">
									<div class="slideCaptionInner">
										<h2 style="margin:0;">For your Business</h2>
										<p style="padding:0;">Cum sociis natoque penatibus et magnis dis parturient montesroin vel nibh</p>
									</div>
								</div>
							</li>
							<li>
								<img src="images/img/slide_3.jpg" alt="" class="slide-image" />
								<div class="slideCaption">
									<div class="slideCaptionInner">
										<a style="float:right; margin:6px 0 0;" href="#" class="button_medium"><span>Click Here</span></a>
										<h2 style="margin:0;">Too big to stay unnoticed</h2>
										<p style="padding:0;">Cum sociis natoque penatibus et magnis dis parturient montesnascetur ridiculus mus. Pellentesque tristique!</p>
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
							<h1 class="aligncenter" style="font-size:30px;">Hello, this is <span class="color_3">Shepard</span>, responsive corporate WordPress theme <br /> that perfectly fits to represent your Business</h1>
							<p>&nbsp;</p>
							<div class="cl"></div>
							<section class="post_type_shortcode">
								<h4 class="cms_title">Latest works <span class="widget_navi"><a href="#" class="cmsms_content_prev_slide"></a><a href="#" class="cmsms_content_next_slide"></a></span></h4>
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
													<a href="album_four.html" class="preloader" title="">
														<img src="images/img/fproject_4_1.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="album_four.html">Fully responsive</a></h4>
												</header>
												<div class="entry-content">
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
												<footer class="entry-meta">
													<ul class="cms_category">
														<li><small><a href="#">Branding</a></small></li>
													</ul>
												</footer>
											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="album_four.html" class="preloader" title="">
														<img src="images/img/fproject_4_2.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="album_four.html">Easy to customize</a></h4>
												</header>
												<div class="entry-content">
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
												<footer class="entry-meta">
													<ul class="cms_category">
														<li><small><a href="#">Websites</a></small></li>
													</ul>
												</footer>
											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="album_four.html" class="preloader" title="">
														<img src="images/img/fproject_4_3.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="album_four.html">Clean & corporative</a></h4>
												</header>
												<div class="entry-content">
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
												<footer class="entry-meta">
													<ul class="cms_category">
														<li><small><a href="#">Photography</a>,</small></li>
														<li><small><a href="#">Artwork</a></small></li>
													</ul>
												</footer>
											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="album_four.html" class="preloader" title="">
														<img src="images/img/fproject_4_4.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="album_four.html">SEO optimised</a></h4>
												</header>
												<div class="entry-content">
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
												<footer class="entry-meta">
													<ul class="cms_category">
														<li><small><a href="#">Advertising</a></small></li>
													</ul>
												</footer>
											</article>
										</div>
									</li>
									<li class="latest_item">
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="album_four.html" class="preloader" title="">
														<img src="images/img/fproject_4_1.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="album_four.html">Fully responsive</a></h4>
												</header>
												<div class="entry-content">
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
												<footer class="entry-meta">
													<ul class="cms_category">
														<li><small><a href="#">Branding</a></small></li>
													</ul>
												</footer>
											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="album_four.html" class="preloader" title="">
														<img src="images/img/fproject_4_2.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="album_four.html">Easy to customize</a></h4>
												</header>
												<div class="entry-content">
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
												<footer class="entry-meta">
													<ul class="cms_category">
														<li><small><a href="#">Websites</a></small></li>
													</ul>
												</footer>
											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="album_four.html" class="preloader" title="">
														<img src="images/img/fproject_4_3.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="album_four.html">Clean & corporative</a></h4>
												</header>
												<div class="entry-content">
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
												<footer class="entry-meta">
													<ul class="cms_category">
														<li><small><a href="#">Photography</a>,</small></li>
														<li><small><a href="#">Artwork</a></small></li>
													</ul>
												</footer>
											</article>
										</div>
										<div class="one_fourth">
											<article class="portfolio hentry">
												<figure class="top_img_radius">
													<a href="album_four.html" class="preloader" title="">
														<img src="images/img/fproject_4_4.jpg" alt="" class="fullwidth top_img_radius" />
													</a>
												</figure>
												<header class="entry-header">
													<h4 class="entry-title"><a href="album_four.html">SEO optimised</a></h4>
												</header>
												<div class="entry-content">
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
												<footer class="entry-meta">
													<ul class="cms_category">
														<li><small><a href="#">Advertising</a></small></li>
													</ul>
												</footer>
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
					<div class="divider"></div>
					<section class="middle_sidebar">
						<div class="one_third">
							<aside class="widget widget_text">
								<h4 class="widgettitle">Who we are?</h4>
								<div class="cms_widget_content">
									<figure class="top_img_radius">
										<img src="images/img/about_1.jpg" alt="" class="fullwidth top_img_radius" />
									</figure>
									<p></p>
									<p>Pellentesque tristique volutpat nunc, id rhoncus augue tristique sed. In at nisln ulla, et vestibulum risus. Fermentum in eros. Nulla sed magna duiet vestibulum risus. Fermentum in eros.</p>
									<a href="#" class="button fr"><span>Read More</span></a>
								</div>
							</aside>
						</div>
						<div class="one_third">
							<aside class="widget widget_custom_tweets_entries">
								<div class="widgettitle">
									<a href="#" class="button fr"><span>Follow</span></a>
									<h4>Twitter</h4>
								</div>
								<div id="tweetFeed"></div>
								<script type="text/javascript">
									jQuery(document).ready(function(){
										jQuery('#tweetFeed').jTweetsAnywhere({
											username: 'cmsmasters',
											count: 3,
											showTweetFeed : {
												showTwitterBird: false
											}
										});
									});
								</script>
							</aside>
						</div>
						<div class="one_third">
							<aside class="widget widget_custom_recent_entries">
								<h4 class="widgettitle">Latest Posts <span class="widget_navi"><a href="#" class="prev"></a><a href="#" class="next"></a></span></h4>
								<ul>
									<li>
										<div class="cms_widget_content">
											<figure class="alignleft"><img src="images/img/latest_post_1.jpg" alt="" /></figure>
											<h6><a href="openpost.html">Fully responsive HTML5 & CSS3 template</a></h6>
											<div class="cl"></div>
											<p>Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus.</p>
											<abbr title="May 5" class="published">May 5</abbr>
											<a class="cms_comment" href="openpost.html#comments"><small>3</small></a>
										</div>
									</li>
									<li>
										<div class="cms_widget_content">
											<figure class="alignleft"><img src="images/img/latest_post_2.jpg" alt="" /></figure>
											<h6><a href="openpost.html">Full browsers compatibility </a></h6>
											<div class="cl"></div>
											<p>Cum sociis natoque penatibus et magnis dis parturient montes. nascetur ridiculus mus.</p>
											<abbr title="May 5" class="published">May 5</abbr>
											<a class="cms_comment" href="openpost.html#comments"><small>3</small></a>
										</div>
									</li>
								</ul>
							</aside>
						</div>
					</section>
<!-- __________________________________________________ Finish Middle Sidebar -->

				</section>
<!-- __________________________________________________ Finish Middle -->


<?php get_footer(); ?>
