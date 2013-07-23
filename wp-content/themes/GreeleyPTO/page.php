
<?php get_header(); ?>
<div id="main-content"> <!--wraps the stuff in the white - left sidebar, center, right sidebar -->

    <div id="page-article">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

		<div class="attachment-post-thumbnail"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'attachment-post-thumbnail' ); } ?>
</div>	
                    <h2 class="pagehead"><?php the_title(); ?></h2>
			                       
			<div class="entry">

				<?php the_content(); ?>
                             <div class="postmetadata" >
				
                           Posted on: <?php the_time('F jS, Y') ?>
			</div>
                        

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		

		<?php endwhile; endif; ?>
        


    </div> <!-- end page-article -->
               <?php get_footer(); ?></div> <!-- end main-content -->
                     
</div> <!-- END page-wrap -->