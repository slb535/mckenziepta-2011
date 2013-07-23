<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    
    
    if (function_exists('register_nav_menus')) {
    	register_nav_menus(array('main-menu' => 'Main Navigation'));
    }
    
add_theme_support( 'post-thumbnails' );

//set_post_thumbnail_size( 50, 50 ); // Normal post thumbnails

//index page thumbnail size is in the index.php file


if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'attachment-post-thumbnail', 250, 9999 ); // Permalink thumbnail size

}

add_post_type_support( 'page', 'excerpt' );

// blocking category "notfeed" from RSS Feed 
function myFilter($query) {
	    if ($query->is_feed) {
	        $query->set('cat','-115'); //Don't forget to change the category ID 
	    }
	return $query;
	}
	 
	add_filter('pre_get_posts','myFilter');
        


// Create shortcode navmenu for McClubs        
function mcclubs_menu () {
return '<a href="/enrichment/mcclubs-home/fall-listing/"  class="button red mc_nav">Clubs</a>         <a href="/enrichment/mcclubs-home/mcclubs-policies-and-procedures/"  class="button red mc_nav">Policies </a>  <a href="/enrichment/mcclubs-home/mcclubs-schedule/"  class="button red mc_nav">Schedule</a>   <a href="/enrichment/mcclubs-home/mcclubs-faq/" class="button red mc_nav">FAQs</a>';
}
add_shortcode('mcclubs_menu', 'mcclubs_menu');
        
     // blocking category "notsearch" from Search    
//function SearchFilter($query) {
//if ($query->is_search) { 
//    $query->set('cat',' '); 
//}
//return $query; 
//}
//add_filter('pre_get_posts','SearchFilter');
        
        
