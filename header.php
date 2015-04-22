<?php

	/**
	 * HEADER
	 *
	 * Aesthetic Perspectives
	 *
	 * @package WordPress
	 * @subpackage Aesthetic_Perspectives
	 * @since Aesthetic Perspectives 1.0
	 */
	  
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<?php bloginfo( 'description' ); ?>
	<title><?php wp_title('–',true,'right'); ?><?php bloginfo('name'); ?></title>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/MyFontsWebfontsKit.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" width="16px" height="16px" />
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<script src="../../assets/js/html5shiv.js"></script>
	<script src="../../assets/js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<!-- Content -->
<body>
	<!-- Header -->
	<div id="header" class="fixed">	
		<div class="container">
			<div id="header-nav" class="one column">
				<div class="logotype">	
					<h1><a href="/">aesthetic perspectives</a></h1>
				</div>
				<div id="mobile-nav">
					<a id="mobile-icon" href="#">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<nav class="italic">
					<span class="yellow primary-nav"><a href="http://aestheticperspectives.com">Home</a>.</span>
					<span class="yellow primary-nav"><a href="http://aestheticperspectives.com/about">About</a>.</span>
					<span class="yellow primary-nav"><a class="action" href="#search">Search</a></span>
					<span class="blue secondary-nav"><a href="http://aestheticperspectives.com/category/culture-category/">Culture</a>.</span>
					<span class="blue secondary-nav"><a href="http://aestheticperspectives.com/category/design-category/">Design</a>.</span>
					<span class="blue secondary-nav"><a href="http://aestheticperspectives.com/category/art-category/">Art</a>.</span>
				</nav>
			</div>
		</div>
	</div>
	<!-- Search -->
	<div id="search" class="feature center">
		<?php get_search_form(); ?>
	</div>