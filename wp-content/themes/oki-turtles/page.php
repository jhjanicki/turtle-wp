<?php get_header(); ?>



<section class="module parallax parallax-2">		
	<h1> Sea Turtles of Okinawa </h1>
	<span class='languages'>
		<div class="button2" style="display: inline;"> English </div>
		<div class="button2" style="display: inline;"> Japanese </div> 
		<div class="button2" style="display: inline;"> French </div> 
		<div class="button2" style="display: inline;"> Chinese </div> 
	</span>
</section>


	
	<div class="wrapper">
	
			<?php if (have_posts()): while (have_posts()):the_post(); ?>
      		
      			<?php the_content(); ?>
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
 
    
    
    </div> <!-- /.wrapper -->


<?php get_footer(); ?>   