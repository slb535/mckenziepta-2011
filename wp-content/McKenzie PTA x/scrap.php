from style.css

.button { 
    background-image: -moz-linear-gradient(top, #6b7886, #3b4f63); 
    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #6b7886),color-stop(1, #3b4f63)); 
    padding: 5px 15px; 
    width: 150px;
    margin-right: 40px;
    margin-bottom: 10px;
    float: left;
    -moz-border-radius: 20px; 
    color: white; font-weight: bold !important; 
    text-transform: uppercase; border: 2px solid white !important; -moz-box-shadow: 1px 1px 3px #666; -webkit-box-shadow: 1px 1px 3px #666;
}

    
.button a:hover { background-image: none; background-color: #6b7886; -moz-box-shadow: 0px 0px 2px #999; text-decoration: none !important; 
}

.icon_left {
    padding-right: 5px;
    width: 30px;
    height: 60px;
    border-style: dashed;
}

/* committee columns*/
  
  div.columns ul
{
  width: 650px;  /* room for 3 columns */
  list-style-type: none;
  margin-left: 0;
}
div.columns ul li
{
  float: left;
  width: 16em;  /* accommodate the widest item */
  font-size:11px;
  padding-bottom: 5px;
  padding-right: 20px;
   margin-left:0;
}

div.columns ul li:first-line {
    font-weight: bold;
    margin-top: 5px;
    
}
/* stop the floating after the list */
div.columns br
{
  clear: left;
}
/* separate the list from what follows it */
div.columns
{
  margin-bottom: 1em;
  
}

/* end of columns*/


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