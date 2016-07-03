<?php get_header(); ?>




<!-- 
<div class="parallax-window" id="parallax1" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/turtle.jpg">
	
</div>
 -->

<section class="module parallax parallax-1">		
	<h1> Sea Turtles of Okinawa </h1>
</section>


	
	<div class="wrapper">
	
			<?php if (have_posts()): while (have_posts()):the_post(); ?>
      		
      			<?php the_content(); ?>
      		
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
 
       
    
    </div> <!-- /.wrapper -->


   
   
 



   




<?php get_footer(); ?>   