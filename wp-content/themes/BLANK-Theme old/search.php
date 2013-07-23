<?php get_header(); ?>
<div id="main-content"> <!--wraps the stuff in the white - left sidebar, center, right sidebar -->

 <?php get_sidebar(); ?>

    <div id="page-article"  style="width: 680px">

	<?php if (have_posts()) : ?>

		<h2 class="pagehead">Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			 <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(90,90), array("class" => "thumbnail-cat")); } ?>

                                
                                
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>



			<div class="entry">

				<?php the_content("Read more . . ."); ?>

				<!-- <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?> -->

			</div>


                        <div class="date">
				
                            Posted on: <?php the_time('F jS, Y') ?>
			</div>
                        
                         			

		<?php endwhile; ?>


	<?php else : ?>

		<h2>Sorry, no pages were found.</h2>

	<?php endif; ?>

</div>
    
    	
</div> <!-- END center-wrap -->

<?php get_footer(); ?> 