    <?php
    /*
    Template Name: McClubs

    */
    ?>

<?php include(TEMPLATEPATH.'/mcclubs_header.php'); ?>

<div id="main-content"> <!--wraps the stuff in the white - left sidebar, center, right sidebar -->

    <div id="page-article">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

</div>	
   <h2 class="pagehead"><?php the_title(); ?></h2>  
       
       <div class="register_box" style="width: 800px; padding: 5px; margin-bottom: 20px;">
           <div style="padding-bottom: 10px"><a href="/enrichment/mcclubs-home/"><img src="/images/mcclubs_logo.gif" border="0" width="175" height="67"/ ></a></div>
           
           <div style="float: right; margin-top: -40px;">
   <?php echo do_shortcode("[mcclubs_menu]"); ?></div>
        <strong>Questions?</strong>
<ul style="list-style-type: none;">
	<li><strong>Martha McKeon and Laura Tiebert</strong>  <a href="mailto:mcclubs@mckenziepta.com">mcclubs@mckenziepta.com</a></li>
</ul></div><br />

                        			

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