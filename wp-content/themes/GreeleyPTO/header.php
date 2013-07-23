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

        

                <!--[if IE]>

<style type="text/css">

aside {

 display:inline;

}

</style>

<![endif]-->

	

	 




	<?php wp_head(); ?>

   

	

</head>



<body <?php body_class(); ?>>

	

	<div class="container">
            <div ID="logo-area">
              <div id="logo"><a href="<?php echo get_option('home'); ?>/"> <img src="/images/greeley_text.png" width="261" height="111" border="0" alt="<?php bloginfo('name'); ?>" /></a></div>
              <div id="search-area">
                  <div id="small_nav"><a href="/contact-us/">Contact Us</a>  |  <a href="http://www.winnetka36.org/greeley/" target="new">Greeley School</a>   |   <a href="http://www.winnetka36.org/" target="new">District 36</a> </div>             
                  <div id="search"> <?php get_search_form(""); ?>    </div>   
              </div>
            </div>
 
                  <div class="clearboth"></div>

	<?php wp_nav_menu(array( 

			'theme_location' => 'header-menu',

			'menu_class' => 'dropdown',

			'container_id' => 'navigation',

			'fallback_cb' => 'wp_page_menu'

			)); ?>

