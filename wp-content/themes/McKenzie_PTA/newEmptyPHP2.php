<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="StyleSheet" href="<?php bloginfo('template_directory'); ?>/css/home.css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="pageWrapper">

		<div id="header">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo2.png" height="60px" width="60px" alt="Key Care Logo" id="logo" />
			
			<h1 id="blogTitle"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			
			<p id="blogSlogan"><?php bloginfo('description'); ?></p>
			
			<span id="searchBox"><?php get_search_form(); ?></span>
		</div>
		
		<div id="featuredBanner">
		<img src="<?php bloginfo('template_directory'); ?>/images/nursebanner.png" alt="Nurse Banner" height="250px" width="1000px" id="featuredImage" />
	</div>
	
	
	<?php wp_nav_menu(array( 
			'theme_location' => 'main-menu',
			'menu_class' => 'dropdown',
			'container_id' => 'navigation',
			'fallback_cb' => 'wp_page_menu'
			)); ?>

	

