    <?php
    /*
    Template Name: McClubs PayPal

    */
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>

<link rel='stylesheet' id='form-manager-css-css'  href='http://mckenziepta.com/wp-content/plugins/wordpress-form-manager/css/style.css?ver=3.2.1' type='text/css' media='all' />
<link href="/wp-content/themes/BLANK-Theme/style.css" rel="stylesheet" type="text/css" />
<link href="/wp-content/themes/BLANK-Theme/mcclubs.css" rel="stylesheet" type="text/css" />
</head>

<body>
    
    <div class="mc_register">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
            <div class="register_box"><p>Your PayPal cart will be loaded in another window or tab. </p>

<p>Please close this window to continue to add more classes to your cart or switch to the PayPal window to pay and complete your registration.</p></div>

				<?php the_content(); ?>
                             
	 

	
        
        

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	
		

		<?php endwhile; endif; ?>
        

             
		</div>
       
                       
</body></html>