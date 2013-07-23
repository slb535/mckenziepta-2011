<?php get_header(); ?>

<div id="main-content">
    
           
     <aside>
        <ul>
            <li><a href="">Grocery Dollars</a></li>
                <p class="descr">The easiest way to raise
                money for school. Doesn't cost you a cent!</p>
            	<li><a href="">Spirit Wear</a></li>
            	<li><a href="">Birthday Books</a></li>
            	<li><a href="">Getting to Know McKenzie</a> </li>
         </ul>                                               
      </aside>
      

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php the_content(__('Read more'));?><div style="clear:both;"></div>
	
        
        <p class="date"><b>Posted on:</b>   <?php the_time('F j, Y'); ?>  |  
	
	<span class="bt-links"><strong>Category:</strong> <?php the_category(', ') ?><br /><?php the_tags('<strong>Tags:</strong> ',' > '); ?></span>
	</p>
	<!--
	<?php trackback_rdf(); ?>
	-->
	
	
	<?php endwhile; else: ?>
	
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

	</div>
	
<?php include(TEMPLATEPATH."/l_sidebar.php");?>

<?php include(TEMPLATEPATH."/r_sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>