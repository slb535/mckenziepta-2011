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

		<div class="attachment-post-thumbnail"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'attachment-post-thumbnail' ); } ?>
</div>	
                    <h2 class="pagehead"><?php the_title(); ?></h2> <img src="/images/mcclubs_logo.gif" width="175" height="67"/>

		
          <p>Please note that clubs have varying start, end and skip dates. 
<p><strong>Class rosters with club details will be emailed to parents before classes begin.</strong>
<p>Contact <a href="mailto:mcclubs@mckenziepta.com">mcclubs@mckenziepta.com</a> with any questions.
<p align="left"><a href="mcclubs_winter2011.pdf"><strong>Printable Version</strong></a>

<a name="Monday"></a> 
<div class="day">Mondays</div> 

<div class="class-container">

 <div class="classtitle">SMART BOARD CLUB <span class="grades">Grades 1-4</span> <span class="am">morning class</span></div> <div class="register"><a class="fancybox iframe" href="/mc-drawing1/"><div class="button mc_blue small">Register</div></a></div>
<!-- location and pickup details --> 
<div class="location"> 
<ul> 
<li>Location<br />
Art Room</li>
<li>Pickup Time<br /> 4:20 pm</li>
<li>Pickup Location <br />
Lobby</li>
</ul></div>
<div class="descriptions">
This time you get to be the teacher! Learn the tools and tricks to make a SMART Board activity. You will learn the Notebook software program, design activities and share with your classmates. Bring your creative ideas and fun attitude. <br />
<span class="addinfo">$70 • Jan 24-Mar 14 • <em>No class 2/21</em> <em>• </em> min/max: 8/none </span></div>


</div>

</div>

		
		

		<?php endwhile; endif; ?>
        


    </div> <!-- end page-article -->
</div> <!-- end main-content -->
 
	
  
           <?php get_footer(); ?><BR />
                


           
</div> <!-- END page-wrap -->