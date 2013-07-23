  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left-sidebar-widgets') ) : ?>
<?php endif; ?> 
          




<?php query_posts($query_string . '&cat=-24'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			 
                            <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(125,100), array("class" => "thumbnail")); } ?>

                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                        <?php the_content("Read more . . ."); ?>
                           
                       
		</div>

	<?php endwhile; ?>

	

	<?php endif; ?>







     <?php get_sidebar(); ?>
