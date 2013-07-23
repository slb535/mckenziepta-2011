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
		         wp_title(''); echo ' - '; }
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
	
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	


	<?php wp_head(); ?>
   
	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
            
             <div id="logo"></div>

		<header><BR>
			<h1 class="fontface">&nbsp;&nbsp;<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			
		</header>
            
             <div id="small_nav"><a href="http://wp.me/P1AfoP-2I">Contact Us</a>  |  <a href="http://www.wilmette39.org/index.php?option=com_content&view=category&layout=blog&id=327&Itemid=35" target="new">McKenzie School</a>   |   <a href="http://www.wilmette39.org/" target="new">District 39</a> </div>
             <div id="search"> <?php get_search_form(""); ?>    </div>         
 

	
		
             <nav>
              
	<?php wp_nav_menu(array( 
			'theme_location' => 'main-menu',
			'menu_class' => 'dropdown',
			'container_id' => 'navigation',
			'fallback_cb' => 'wp_page_menu'
			)); ?>
             </nav>