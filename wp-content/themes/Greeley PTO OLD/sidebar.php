
<div id="aside2">
    
    <div class="rss">
    <ul><li><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.png" 
                                                          border="0" class="secondary_aside" alt="Subscribe to <?php bloginfo('name'); ?>" c/>Subscribe to our <BR />RSS Feed</a> 
        </li></ul>
    </div>
    
    <div id="longtermlinks" >
    
   
  
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        <ul>
<?php
$postlist = get_posts('category=112&numberposts=5');
foreach ($postlist as $post) :
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>    
        </ul>
        
        
     <ul>
                 

                 <hr></hr>      
           <?php $recent = new WP_Query("cat=116&showposts=1"); while($recent->have_posts()) : $recent->the_post();?>
<li><img src="images/monitor_icon.png" class="icon3" width="30"  height="26" align="left" border="0" /><a href="<?php the_permalink() ?>"" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; ?>
<!-- <p class="descr">Don't miss the latest news from Dr. Welter.</p> -->



        <li><a href="/lunch-menus/"><img src="images/lunch_icon.png" class="icon3" width="30"  height="26" border="0" />Lunch Menu</a></li>
        <li><a href="http://mckenziepta.com/?page_id=424"><img src="images/cal_icon.png" class="icon3" width="30"  height="26" border="0" />McKenzie Calendar</a></li>
        
     </ul>
    
            
         <hr></hr>
         
         
         <ul> 
             <li><img src="images/clipboard_icon.png" class="icon2" width="30"  align="left" border="0" />
                 <a href="http://mckenziepta.com/?page_id=461" class="secondary_aside">Cafeteria Duty</a></li>
             <li><img src="images/megaphone.png" class="icon2" width="30"  align="left" border="0" /><a href="http://mckenziepta.com/?page_id=287" class="secondary_aside">Communications Submission Form</a></li>
             <li><img src="images/yearbook.png" class="icon2"  width="30" height="26" align="left" border="0" style="padding-bottom: 10px" />
                 <a href="https://images.jostens.com/login?user=400112435&pw=photos"  class="secondary_aside" target="new">Upload Yearbook <BR>Pictures</a></li>
             
             
         </ul>
        
    	<!-- <?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
     <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(100,100), array("class" => "thumbnail")); } ?>

    
    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        
       
        
    	<?php wp_list_bookmarks(); ?>
    
    	<h2>Meta</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		
    	</ul>-->
	
	<?php endif; ?> 
        

</div>
    </div>