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
    		'name' => 'Right Sidebar Widgets',
    		'id'   => 'right-sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
      if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Left Sidebar Widgets',
    		'id'   => 'left-sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<div class="g_title">',
    		'after_title'   => '</div>'
    	));
    }
    
   
     
    function register_my_menus() {
    register_nav_menus(
    array(
    'header-menu' => __( 'Header Menu' ),
    'left-sidebar' => __( 'Left Sidebar' ),
    'right-sidebar' => __( 'Right Sidebar' ),
    'topleft-sidebar' => __( 'Top Left Sidebar' ),
    'menu-5' => __( 'Menu 5' )
    )
    );
    }

    add_action( 'init', 'register_my_menus' );




    
    
add_theme_support( 'post-thumbnails' );

//set_post_thumbnail_size( 50, 50 ); // Normal post thumbnails

//index page thumbnail size is in the index.php file


if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'attachment-post-thumbnail', 300, 300 ); // Permalink thumbnail size

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
        

