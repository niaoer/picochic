<!DOCTYPE html> 
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php
		global $page, $paged;

		wp_title( '|', true, 'right' );

		bloginfo( 'name' );

		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'picochic' ), max( $paged, $page ) );

		?></title>
	<?php picochic_get_settings('favicon'); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- HTML5 for IE < 9 -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
	<header id="header">

		<section id="head">
			<form method="get" id="headersearch" action="<?php echo home_url(); ?>" >
				<label class="hidden" for="hs"><?php _e('Search', 'picochic'); ?>:</label>
				<div>
					<input type="text" value="<?php get_search_query();?>" name="s" id="hs" /><input type="submit" id="hsearchsubmit" value="<?php _e('Search', 'picochic'); ?>" /> 
				</div>
			</form>	
			<?php picochic_get_settings('logo'); ?>
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<p class="description"><?php bloginfo('description'); ?></p>
		</section>

		<?php
			$header_image = get_header_image();
			if (!empty($header_image)) { ?>
			<div id="header-image-div"><a href="<?php echo home_url(); ?>"><img id="headerimage" src="<?php header_image(); ?>" alt="" /></a></div>
		<?php } ?>
		
		<button id="showmenu"><?php _e('Menu', 'picochic'); ?></button>
		<form method="get" id="mobilesearch" action="<?php echo home_url(); ?>" >
			<label class="hidden" for="s"><?php _e('Search', 'picochic'); ?>:</label>
			<div>
				<input type="text" value="<?php get_search_query();?>" name="s" id="s" /><input type="submit" id="searchsubmit" value="<?php _e('Search', 'picochic'); ?>" /> 
			</div>
		</form>
		
		<nav id="mobnav">
			<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		</nav>


	</header>

	<section id="main">


