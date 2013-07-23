<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats please -->

<link rel="Shortcut Icon" href="<?php echo get_settings('home'); ?>/wp-content/themes/elements-of-seo/images/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /><?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
<style type="text/css" media="screen">
<!-- @import url( <?php bloginfo('stylesheet_url'); ?> ); -->
</style>
</head>

<body>

<div id="page-wrap" class="group">

	<header>
                  <div id="logo"></div>
                      
                       <h1>McKenzie PTA</h1>
			
			
			
			<div id="small_nav">  McKenzie School   |   District 39   |   </div>
            </header>
		
 
  <!--       <ul>
            <li><a href="index.html">Home</a> </li>
                <li>Enrichment &amp; Clubs</li>
                <li>Programs &amp; Events</li>
                <li>Parent Resources </li>
                <li>Volunteering </li>
                <li>PTA Resources</li>
                <li>Helpful Hints</li>
         </ul> -->
        
        <nav>
            <ul>
			<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
                         
                        <?php wp_list_categories ('sort_column=menu_order&title_li'); ?>  
             </ul>
         </nav>
	
		
	
	