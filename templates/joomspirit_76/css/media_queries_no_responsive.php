<?php
header("Content-type: text/css");
if (isset($_GET['width'])) 
{ $width = $_GET['width'];}
else { $width = '980px'; }
?>


/**
*
*		Media queries no responsive
*
**/


.hidden {
display: none;
visibility: hidden;
}

.visible-phone {
display: none !important;
}

.visible-tablet {
display: none !important;
}

.hidden-desktop {
display: none !important;
}

.visible-desktop {
display: inherit !important;
}



/**			Width 	: I suppose the value is in pixels because it's a non sense to use a percentage value without responsive feature	**/

@media screen and (max-width: <?php echo $width ; ?>) {

	.site , .wrapper-site, .background-site {
	min-width:<?php echo $width ; ?>;
	}
	
}