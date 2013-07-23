<?php get_header(); ?>

<div class="three-column-spread">
<div class="sidebar1">
       
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left-sidebar-widgets') ) : ?>
<?php endif; ?> 
          
                             

     
      </div>	
    
           

    
<div id="content">
    
    <?php query_posts($query_string . '&cat=-24'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			 
                            <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(125,100), array("class" => "thumbnail")); } ?>

                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                        <?php the_content("Read more . . ."); ?>
                           
                       
		</div>

	<?php endwhile; ?>

	

	<?php endif; ?>

</div> <!-- EXTRA /DIV. NOT SURE WHY THIS NEEDS TO BE HERE. THERE's AN EXTRA <div> somewhere having to do with the loop -->

                      
</div> <!-- end content -->
                    


     <?php get_sidebar(); ?>

     
<div class="clearboth"></div>
</div> <!-- end three-column-spread -->

<div style="margin-left:200px"> <?php get_footer(); ?></div>

 
           
           
</div> <!-- END container -->


                
  
                 

