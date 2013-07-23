
<div class="sidebar2">
    
        <div id="longtermlinks" >

    
    
    <div class="rss">
    <ul><li><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.png" 
                                                          border="0" class="secondary_aside" alt="Subscribe to <?php bloginfo('name'); ?>" c/>Subscribe to our <BR />RSS Feed</a> 
        </li></ul>
    </div>
    
       
          <ul>
           <?php $recent = new WP_Query("cat=25&showposts=1"); while($recent->have_posts()) : $recent->the_post();?>
<li "><!-- <img src="images/greeting_icon.png" class="icon3" width="30"  height="26" align="left" border="0" /> --><a href="<?php the_permalink() ?>"" rel="bookmark" style="background: #2f4d7c;"><?php the_title(); ?></a></li>
<?php endwhile; ?>
          </ul>
        
        
         <hr></hr>  
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar Widgets')) : else : ?>
    
         
         
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        <ul>
                <?php
                    $postlist = get_posts('category=112&numberposts=5');
                    foreach ($postlist as $post) :
                ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; ?>    
        </ul>
    	
	<?php endif; ?> 
        

        </div>
</div>