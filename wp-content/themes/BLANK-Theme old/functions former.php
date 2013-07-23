<?php

	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebars widget zone
    if (function_exists('register_sidebars')) {
    	register_sidebar(2, array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }



//if ( function_exists('register_sidebars') )
 //   register_sidebars(2);



function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ), 'extra-menu' => __( 'Extra Menu' ))
  );
}

if (function_exists('register_nav_menus')) {
    	register_nav_menus(array('main-menu' => 'Main Navigation'));
    }


add_action( 'init', 'register_my_menus' );

add_theme_support( 'menus' )

?>