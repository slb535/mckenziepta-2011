<!-- begin sidebar2 -->
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.png" alt="Subscribe to <?php bloginfo('name'); ?>" />Click here to Subscribe!</a> 

<ul>
    <?php query_posts('category_name=sidebar&showposts=5'); ?>
<?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>  </li>
        <?php endwhile; ?>
    </ul>
    

<div id="sidebar2">
<ul>
     <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>

     <?php endif; ?>
  </ul>
</div>


 
<!-- end sidebar2 -->


