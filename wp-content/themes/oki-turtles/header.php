<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Okinawa Sea Turtles</title>

 	<?php wp_head(); ?>
    
	
    
</head>

<div id="container">

   <body <?php body_class(); ?>>

	<nav class="menu-opener">
		<div class="menu-opener-inner"></div>
	</nav>
	  <nav class="menu">
		<!-- 
<ul class="menu-inner">
		  <li><a href="#" class="menu-link">
			Home
		  </a></li>
		  <li><a href="#" class="menu-link">
			Map
		  </a></li>
		  <li><a href="#" class="menu-link">
			Stranding
		  </a></li>
		  <li><a href="#" class="menu-link">
			Turtle ID
		  </a></li>
		  <li><a href="#" class="menu-link">
			Blog
		  </a></li>
		</ul>
 -->
 
  <?php 
				$args = array(
					
				  'menu'        => 'header-menu',
				  'menu_class'  => 'menu-inner',
				  'container'   => 'true',
				  'container_class'   =>'menu',
				);
				wp_nav_menu( $args );
	 			?>
                
          
	  </nav>


   