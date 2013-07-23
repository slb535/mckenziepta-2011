    <?php
    /*
    Template Name: McClubs Registration

    */
    ?>

<?php include(TEMPLATEPATH.'/mcclubs_header_reg.php'); ?>

    
    <div class="mc_register">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
            

				<?php the_content(); ?>
                             
	 

	
        
        

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	
		

		<?php endwhile; endif; ?>
        

             
		</div>
       
<?php include(TEMPLATEPATH.'/mcclubs_footer.php'); ?>
