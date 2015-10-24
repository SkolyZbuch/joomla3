<?php
header("Content-type: text/css");
if (isset($_GET['font'])) 
{ $font = $_GET['font'];}
else { $font = 'sans-serif'; }
if (isset($_GET['font_content'])) 
{ $font_content = $_GET['font_content'];}
else { $font_content = 'sans-serif'; }
if (isset($_GET['width'])) 
{ $width = $_GET['width'];}
else { $width = '20'; }
if (isset($_GET['width_left'])) 
{ $width_left = $_GET['width_left'];}
else { $width_left = '20'; }
if (isset($_GET['width_right'])) 
{ $width_right = $_GET['width_right'];}
else { $width_right = '20'; }
?>

/**		FONT	**/

h1, .componentheading, h2.contentheading, .blog-featured h2 {
font-family: '<?php echo $font ; ?>', 'Open Sans';
}

.dropdown ul li a, .dropdown ul li span.separator {
font-family: '<?php echo $font ; ?>', 'Open Sans';
}

.top h3, .bottom h3, .left_column h3, .right-module-position h3, .user1 h3, .user2 h3, .user3 h3, 
.user4 h3, .user5 h3, .user6 h3 {
font-family: '<?php echo $font ; ?>', 'Open Sans';
}

.submenu li a, .submenu li span.separator {
font-family: '<?php echo $font ; ?>', 'Open Sans';
}

body {
font-family: '<?php echo $font_content ; ?>';
}


/**			Width 		**/

.wrapper-site {
width:<?php echo $width ; ?>;
}

.left_column {
width:<?php echo $width_left ; ?>%;
}

.right-module-position {
width:<?php echo $width_right ; ?>%;
}