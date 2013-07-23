<?php

// Add RSS links to <head> section
automatic_feed_links();

// Load jQuery
if (!is_admin()) {
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
        'id' => 'right-sidebar-widgets',
        'description' => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Left Sidebar Widgets',
        'id' => 'left-sidebar-widgets',
        'description' => 'These are widgets for the LEFT sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

//Automate links
add_filter('the_content', 'make_clickable');
add_filter('the_excerpt', 'make_clickable');




if (function_exists('register_nav_menus')) {
    register_nav_menus(array('main-menu' => 'Main Navigation'));
}

add_theme_support('post-thumbnails');

//set_post_thumbnail_size( 50, 50 ); // Normal post thumbnails
//index page thumbnail size is in the index.php file


if (function_exists('add_image_size')) {
    add_image_size('attachment-post-thumbnail', 250, 9999); // Permalink thumbnail size
}

add_post_type_support('page', 'excerpt');

// blocking category "notfeed" from RSS Feed
function myFilter($query) {
    if ($query->is_feed) {
        $query->set('cat', '-115'); //Don't forget to change the category ID
    }
    return $query;
}

add_filter('pre_get_posts', 'myFilter');

// Create shortcode navmenu for Variety Show
function vshow_menu() {
    return '<Td align="center"><img src="/images/vshow_logo2013.gif" alt="" title="Make a Wish" /></td></tr>
</table>

<div style="float: right"><table width=345 cellspacing=5 border=0 ><tr>
    <td align="center">
          <a href="/varietyshow/"><img src="/images/vshow_home.gif"></a>
		  <BR /><a href="/one-stop-shopping/"><img src="/images/vshow_tixtshirtsdvd.gif"></a><br /><a href="/help-out/"><img src="/images/vshow_helpout.gif"></a>
    </td>

    </tr></table></div>';
}

add_shortcode('vshow_menu', 'vshow_menu');



// blocking category "notsearch" from Search
//function SearchFilter($query) {
//if ($query->is_search) {
//    $query->set('cat',' ');
//}
//return $query;
//}
//add_filter('pre_get_posts','SearchFilter');
?>