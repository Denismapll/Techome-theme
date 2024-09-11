<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if (! get_option('site_icon')) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

		* {
			font-family: "Barlow Semi Condensed", sans-serif;
		}

		.header-bg {
			background-color: #00260A;
		}

		.green-color {
			color: #00260A;
		}

		.shadow {
			text-shadow: 2px 2px 5px;
		}

		.homes div a {
			padding: 6px 12px;
			/* background-color: #ECECE3; */
			text-decoration: none;
			font-weight: 600;
			color: #00260A;
			font-size: 24px;
			transition: 200ms all;
		}

		.homes div a:hover {
			background-color: #ECECE3;

		}
	</style>

	<header id="header" role="banner">
		<section class="row justify-content-center align-items-center text-center">

			<div class="text-center p-5 header-bg">
				<a href="#">
					<img src="http://localhost/Techome/wp-content/uploads/2024/09/logo-header.png" alt="logo-techome" srcset="">
				</a>
			</div>

			<div class="text-center p-3">
				<h3 class="green-color mt-2 mb-4 fw-bold" style="text-shadow: 2px 2px 5px;">Escolha sua Techome</h3>
			</div>

		</section>


		<div class="container">
			<div class="row justify-content-center align-items-center text-center homes">
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
				<div class="col-md-1">
					<a href="#">C.4</a>
				</div>
			</div>
		</div>
	</header><!-- #header -->