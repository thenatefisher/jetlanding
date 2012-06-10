<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="An Aircraft Brokerage Tool for Professionals. Trading Jets Made Simple" />
<meta name="keywords" content="brokerage, aircraft, jet, planefax, sale, controller, trade-a-plane" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles/fonts.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles/colors.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,italic,bold,bolditalic" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles/jquery.prettyPhoto.css" type="text/css" media="screen" />
<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/styles/ie.css" type="text/css" />
	<link rel="stylesheet" href="css/styles/ieCss3.css" type="text/css" media="screen" />
<![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.all.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/css3MediaQueries.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.js" type="text/javascript"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	wp_head();
?>
</head>
	<body>

<!-- __________________________________________________ Start Page -->
		<section id="page">
			<div class="container">
				<div class="social_block">
					<ul>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" alt="" />
								<span>Twitter</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon_linkedin.png" alt="" />
								<span>Linked In</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon_googleplus.png" alt="" />
								<span>Google Plus</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.png" alt="" />
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon_dribbble.png" alt="" />
								<span>Dribbble</span>
							</a>
						</li>
					</ul>
					<a href="#" class="social_toggle"><span></span></a>
				</div>
<!-- __________________________________________________ Start Header -->
				<header id="header">
					<a class="logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
					<nav>
						<a href="#" class="top_scroll">
							<span></span>
							<small>Back to top</small>
						</a>
						<ul id="navigation">
							<li class="current_page_item">
								<a href="index.html">
									<span>
										Home
										<small class="subtitle">Start here</small>
									</span>
								</a>
							</li>
							<li><a href="shortcodes.html">
									<span>
										Features
										<small class="subtitle">Tasty cakes</small>
									</span>
								</a>
								<ul>
									<li><a href="shortcodes.html">Shortcodes</a>
										<ul>
											<li><a href="buttons.html">Buttons</a></li>
											<li><a href="boxes.html">InfoBoxes</a></li>
											<li><a href="columns.html">Columns</a></li>
											<li><a href="tooltips.html">Tooltips</a></li>
											<li><a href="tabs.html">Tabs &amp; Toggle</a></li>
											<li><a href="shortcodes.html">Post type shortcode</a></li>
											<li><a href="media.html">Media</a></li>
											<li><a href="player.html">Audio &amp; Video Players</a></li>
											<li><a href="lightboxes.html">Lightboxes</a></li>
											<li><a href="tour.html">Site Tour</a></li>
											<li><a href="googlemaps.html">Google Maps</a></li>
										</ul>
									</li>
									<li><a href="typography.html">Typography</a></li>
									<li><a href="about.html">Layouts</a>
										<ul>
											<li><a href="about.html">About</a></li>
											<li><a href="services.html">Services</a></li>
											<li><a href="error.html">404 Error Page</a></li>
											<li><a href="sitemap.html">Sitemap</a></li>
											<li><a href="lsidebar.html">Left Sidebar</a></li>
											<li><a href="rsidebar.html">Right Sidebar</a></li>
										</ul>
									</li>
									<li><a href="heading.html">Heading Templates</a>
										<ul>
											<li><a href="heading.html">Standard Heading</a></li>
											<li><a href="heading_icon.html">With Icon</a></li>
											<li><a href="heading_text.html">With Text</a></li>
											<li><a href="heading_icon_text.html">Heading With Icon &amp; Text</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="portfolio_sort_four.html">
									<span>
										Portfolio
										<small class="subtitle">Our works</small>
									</span>
								</a>
								<ul>
									<li><a href="portfolio_sort_four.html">Sortable Portfolio</a>
										<ul>
											<li><a href="portfolio_sort_one.html">One Column</a></li>
											<li><a href="portfolio_sort_two.html">Two Columns</a></li>
											<li><a href="portfolio_sort_three.html">Three Columns</a></li>
											<li><a href="portfolio_sort_four.html">Four Columns</a></li>
										</ul>
									</li>
									<li><a href="portfolio_one.html">Portfolio</a>
										<ul>
											<li><a href="portfolio_one.html">One Column</a></li>
											<li><a href="portfolio_two.html">Two Columns</a></li>
											<li><a href="portfolio_three.html">Three Columns</a></li>
											<li><a href="portfolio_four.html">Four Columns</a></li>
										</ul>
									</li>
									<li><a href="project_slider.html">Project layouts</a>
										<ul>
											<li><a href="project_slider.html">Image Slider</a></li>
											<li><a href="project_video.html">Video</a></li>
											<li><a href="album_four.html">Album Four Columns</a></li>
											<li><a href="album_three.html">Album Three Columns</a></li>
											<li><a href="album_two.html">Album Two Columns</a></li>
											<li><a href="album_one.html">Album One Column</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="blog_sidebar.html">
									<span>
										Blogs
										<small class="subtitle">Latest news</small>
									</span>
								</a>
								<ul>
									<li><a href="blog_sidebar.html">Blog with sidebar</a></li>
									<li><a href="blog_fwidth.html">Full width blog</a></li>
								</ul>
							</li>
							<li>
								<a href="contacts.html">
									<span>
										Contacts
										<small class="subtitle">Get in touch</small>
									</span>
								</a>
							</li>
						</ul>
						<select class="resp_navigation">
							<option value="" selected="selected"> - - Navigate to... - - </option>
							<option value="index.html" class="main_item">Home</option>
							<option value="shortcodes.html" class="main_item">Features</option>
							<option value="shortcodes.html"> - - Shortcodes</option>
							<option value="buttons.html"> - - - - Buttons</option>
							<option value="boxes.html"> - - - - InfoBoxes</option>
							<option value="columns.html"> - - - - Columns</option>
							<option value="shortcodes.html"> - - - - Post type shortcoder</option>
							<option value="tooltips.html"> - - - - Tooltips</option>
							<option value="tabs.html"> - - - - Tabs &amp; Toggle</option>
							<option value="media.html"> - - - - Media</option>
							<option value="player.html"> - - - - Audio &amp; Video Players</option>
							<option value="lightboxes.html"> - - - - Lightboxes</option>
							<option value="tour.html"> - - - - Site Tour</option>
							<option value="googlemaps.html"> - - - - Google Maps</option>
							<option value="typography.html"> - - Typography</option>
							<option value="about.html"> - - Layouts</option>
							<option value="about.html"> - - - - About</option>
							<option value="services.html"> - - - - Services</option>
							<option value="error.html"> - - - - 404 Error Page</option>
							<option value="sitemap.html"> - - - - Sitemap</option>
							<option value="lsidebar.html"> - - - - Left Sidebar</option>
							<option value="rsidebar.html"> - - - - Right Sidebar</option>
							<option value="heading.html"> - - Heading Templates</option>
							<option value="heading.html"> - - - - Standard Heading</option>
							<option value="heading_icon.html"> - - - - With Icon</option>
							<option value="heading_text.html"> - - - - With Text</option>
							<option value="heading_icon_text.html"> - - - - Heading With Icon &amp; Text</option>
							<option value="portfolio_sort_four.html" class="main_item">Portfolio</option>
							<option value="portfolio_sort_four.html"> - - Sortable Portfolio</option>
							<option value="portfolio_sort_one.html"> - - - - One Column</option>
							<option value="portfolio_sort_two.html"> - - - - Two Columns</option>
							<option value="portfolio_sort_three.html"> - - - - Three Columns</option>
							<option value="portfolio_sort_four.html"> - - - - Four Columns</option>
							<option value="portfolio_one.html"> - - Portfolio</option>
							<option value="portfolio_one.html"> - - - - One Column</option>
							<option value="portfolio_two.html"> - - - - Two Columns</option>
							<option value="portfolio_three.html"> - - - - Three Columns</option>
							<option value="portfolio_four.html"> - - - - Four Columns</option>
							<option value="project_slider.html"> - - Project layouts</option>
							<option value="project_slider.html"> - - - - Image Slider</option>
							<option value="project_video.html"> - - - - Video</option>
							<option value="album_four.html"> - - - - Album Four Columns</option>
							<option value="album_three.html"> - - - - Album Three Columns</option>
							<option value="album_two.html"> - - - - Album Two Columns</option>
							<option value="album_one.html"> - - - - Album One Column</option>
							<option value="blog_sidebar.html" class="main_item">Blog</option>
							<option value="blog_sidebar.html"> - - Blog with sidebar</option>
							<option value="blog_fwidth.html"> - - Full width blog</option>
							<option value="contacts.html" class="main_item">Contacts</option>
						</select>
					</nav>
				</header>
<!-- __________________________________________________ Finish Header -->

	<div id="main">
