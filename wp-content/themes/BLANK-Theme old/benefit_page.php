    <?php
    /*
    Template Name: Benefit

    */
    ?>

<?php include(TEMPLATEPATH.'/header.php'); ?>

<div id="main-content"> <!--wraps the stuff in the white - left sidebar, center, right sidebar -->

    <div id="page-article">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

</div>	
   <h2 class="pagehead"><?php the_title(); ?></h2>  
       
       <div class="register_box" style="width: 800px; padding: 5px; margin-bottom: 20px;">
           <div style="padding-bottom: 10px"><a href="/category/programs/benefit/"><img src="/images/benefit_logo.png" border="0" width="175" height="250" align="left" /></a> </div>
         <div margin-top: 6px; margin-left: 15px; align="center"><a href="https://auctions.readysetauction.com/mckenziepta/tickets/buy" target="_new" class="button mc_blue">Buy Tickets</a> <a href="http://www.signupgenius.com/go/10C0B4BA5AD2AA20-going" target="_new" class="button mc_blue">Help Out at the Event</a> <a href="/donate-a-bottle-of-red-or-a-bottle-of-white/"  class="button mc_blue">Donate A Bottle of Red/White</a><br />
         
          <a href="http://event.pingg.com/GoingPlaces"  class="button mc_blue">View the invitation / RSVP</a>  <a href="https://auctions.readysetauction.com/mckenziepta/tickets/buy"  class="button mc_blue">Purchase Tickets</a>
          </div>
   <BR />
   <div class="bigbold">
     <p>McKenzie's biggest event only comes once every two years 
       &amp; it's just around the corner!<BR>
       It's the McKenzie Benefit GOING PLACES!</p>
   </div>

<p>As our key fundraiser, generates critical dollars to support the PTA – enrichment programs, field trips and much more. These activities make McKenzie a special place. They ensure our children will be GOING PLACES too.</p>

<P>Join us for a journey of delicious buffet dinner, an exciting raffle, the best silent auction around, and terrific music by McKenzie's own "dad band" Pop Rocks!</P>

<P>7pm–midnight in the Versailles Ballroom, DoubleTree Hotel by Hilton in Skokie</P>

    <strong>Questions? 
	Rebecca Lieber and Emily Zivin</strong>  <a href="mailto:mcclubs@mckenziepta.com">benefit@mckenziepta.com</a></div><br />

                        			

				<?php the_content(); ?>
                             <div class="postmetadata" >
				
                           Posted on: <?php the_time('F jS, Y') ?>
			</div>
                        

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		 </div> <!-- end page-article -->
		
		

		<?php endwhile; endif; ?>
        


   
</div> <!-- end main-content -->
 
	
  
           <?php get_footer(); ?><BR />
                


           
</div> <!-- END page-wrap -->