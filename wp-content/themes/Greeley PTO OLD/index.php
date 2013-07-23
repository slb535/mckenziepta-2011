<?php get_header(); ?>


<div id="main-content" class="group"> <!--wraps the stuff in the white - left sidebar, center, right sidebar -->
    
     <aside>
         
        <ul>
       
            
            <li><a href="http://mckenziepta.com/pta-membershipdirectory/" class="primary"><img src="images/directory_icon.png" width="30" align="left" class="icon" border="0" />PTA Membership and Directory</a></li>
                <p class="descr">Join the PTA and get your student directory today.</p>
                
                
            <li><a href="http://mckenziepta.com/grocery-dollars/" class="primary"><img src="images/grocerydollars.png" class="icon" width="30"  height="26" align="left" border="0"  />
                    Grocery Dollars</a></li>
                <p class="descr">The easiest way to raise
                money for school. Doesn't cost you a cent!</p>
            	<li><a href="http://mckenziepta.com/birthday-books/" class="primary" ><img src="images/birthdaybooks_icon.png" class="icon" width="30" align="left" border="0" />Birthday Books</a></li>
                                <p class="descr">Celebrate your child's birthday with a donation to our school's library.</p>

            	<li><a href="/pdf/GTKM_2011.pdf" class="primary"><img src="images/pawprint_icon.png" width="30" align="left" class="icon" border="0" />Getting to Know McKenzie</a> </li>
                <p class="descr">Get the latest version  here!</p>
            
                
            <!--    <li><a href="" class="primary"><img src="images/checklist_icon.png" width="30" align="left" class="icon" border="0" />Order everything at once:</a></li>
                 <p class="descr">Birthday Books and PTA Membership/Directory in one fell swoop!</p> -->
                 
                 <li><a href="/category/yearbook/"  class="primary"><img src="images/yearbook_icon.png" width="30" align="left" class="icon" border="0" />Yearbook</a> </li>
                <p class="descr">Order your yearbook, upload pictures, enter the cover contest and more!</p>
                
             

         </ul>  
     
      </aside>	
    
           
 <?php get_sidebar(); ?>

    
<div id="article-list">
    
    <?php query_posts($query_string . '&cat=-115'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			 
                            <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(125,125), array("class" => "thumbnail")); } ?>

                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                            
		
			<!-- <div class="entry"> not sure why this is here -->
                          




			
                        <?php the_content("Read more . . ."); ?>
                           
                            
			<!-- </div>-->

                        <div class="date"> 
                            
                          <!--   <div class="postmetadata">
				&nbsp;
                            Posted on: <?php the_time('F jS, Y') ?>
						</div> -->
                        
                        </div>
                        

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

	<h2>Page Not Available Yet</h2>
                
                <p>We are in the process of updating all of the content for the new school year. We hope to have current information on this topic very very soon. Please check back or <a href="<?php bloginfo('rss2_url'); ?>">subscribe to our RSS feed</a>.


	<?php endif; ?>
                      
</div> <!-- end article-list -->
                    


<div style="margin-left:200px"> <?php get_footer(); ?></div>

 
           </div> <!-- end main-content -->	 
           
  
           
</div> <!-- END page-wrap -->


                
  
                 

