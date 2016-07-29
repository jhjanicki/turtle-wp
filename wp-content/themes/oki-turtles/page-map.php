<?php
/*
Template Name: Map
*/
?>

<?php get_header(); ?>


<section class="module parallax parallax-2">		
	<h1> Sea Turtles of Okinawa </h1>
</section>


	
	<div class="wrapper">
	<!-- 

			<div class="row">
				<div class="col-md-12">
				<h2 class="text-center"> Okinawa Injured/ Stranded Sea Turtle Contact by Region </h2>
				</div>
			</div>
 -->
			
			<?php if (have_posts()): while (have_posts()):the_post(); ?>
      		
      			<?php the_content(); ?>
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
      		
      		

			<!-- 
<div class="row margin-top100">
				<div class="field">
								<label for="island">Select an Island:</label>
								<select type="" id="island" name="island">
								</select>
		
							</div>
 -->
				<div id="mapContainer"></div>
				<div id="metadata"></div>

			</div>
    
    
    </div> <!-- /.wrapper -->


<?php get_footer(); ?>   