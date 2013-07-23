from style.css

 h1 a {
        text-decoration: none;
        color: black;
    }
    
    h1 {
  font-size: 36px;
  font-family: Georgia, serif;
   letter-spacing: 0;
  margin-top: -6px;
  margin-left: -10px;
    }  


#longtermlinks, #sidebar2   {
    position: relative;
    margin-right: 0px;
    margin-top: auto;
    width: 150px;
    float: right;
    background-color: #07273E;
}


from functions.php
	
register_sidebar(array(
    'id' => 'header-widgets',
    'name' => 'Header widgets',
    'description' => 'Widget area below the header',
    'before_widget' => '<div id="%1$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));




     	
<?php wp_nav_menu(array(
‘theme_location’ => ‘main-menu’,
‘menu_class’ => ‘dropdown’,
‘container_id’ => ‘navigation’,
‘fallback_cb’ => ‘wp_page_menu’
)); ?>
                     
        

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>


nav {
    background: url(images/navbar_bg.png) repeat-x; 
     height: 31px; 
     position: absolute; 
     left: 0; 
     width: 100%; 
}

nav ul {
    list-style-type: none;
    position: relative; 
    left: -7px; 
    bottom: 5px; 
}

nav ul li {
    display: inline; 
    font-weight: bold; 
    color: white;
}

nav ul li:after {
    content: " | "; 
    padding-right: 3px;
}

nav ul li:before {
    padding-left: 3px;
}

nav ul li a {
    text-decoration: none;
    color: white;
}

nav ul li a:hover {
    text-decoration: underline;
}