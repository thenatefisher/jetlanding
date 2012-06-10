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
								<a href="#">
									<span>
										Get Started
										<small class="subtitle">Try JetDeck Now!</small>
									</span>
								</a>
							</li>
							<li><a href="#">
									<span>
										Features
										<small class="subtitle">Sell More Jets</small>
									</span>
								</a>
								<ul>
									<li><a href="#">Specs</a></li>
									<li><a href="#">Contacts</a></li>
									<li><a href="#">Communication</a></li>
									<li><a href="#">Activity Tracking</a></li>
									<li><a href="#">Organization</a></li>
									<li><a href="#">Mobile</a></li>
								</ul>
							</li>
							<li>
								<a href="#">
									<span>
										Pricing
										<small class="subtitle"></small>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>
										The HUD
										<small class="subtitle">Heads Up</small>
									</span>
								</a>
							</li>

						</ul>
						<select class="resp_navigation">
							<option value="" selected="selected"> - - Navigate to... - - </option>
							<option value="#" class="main_item">Home</option>
							<option value="#" class="main_item">Features</option>
							<option value="#" class="main_item">Pricing</option>
							<option value="#" class="main_item">Blog</option>
						</select>
					</nav>
				</header>
<!-- __________________________________________________ Finish Header -->

	<div id="main">
