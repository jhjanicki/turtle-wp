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


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="turtle-menu">
                <!-- 
<ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html">Home </a>
                    </li>
                    <li>
                        <a href="map.html">Map</a>
                    </li>
                    <li>
                        <a href="stranding.html">Stranding</a>
                    </li>
                    
                    <li>
                        <img id='logo' src='<?php echo get_template_directory_uri(); ?>/images/logo.png'/>
                    </li>
                    <li>
                        <a href="id.html">Turtle ID</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Badges</a>
                    </li>
                </ul>
 -->
                
                <?php 
				$args = array(
					
				  'menu'        => 'header-menu',
				  'theme_location'    => 'header-menu',
                  'depth'             => 2,
				  'menu_class'  => 'nav navbar-nav',
				  'container'   => 'true',
				  'container_id'   =>'turtle-menu',
				  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				  'walker'      => new wp_bootstrap_navwalker()
				);
				wp_nav_menu( $args );
	 			?>
                
            </div>
            <!-- /.navbar-collapse -->

    </nav>