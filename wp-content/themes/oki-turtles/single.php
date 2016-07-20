<?php get_header(); ?>

<section class="module parallax parallax-1">		
	<h1> Sea Turtles of Okinawa </h1>
</section>


<div class="wrapper">
    <div class="row ">
      
      <div class="col-lg-9 padding-right-20">
      
      		<article>
      		<?php if (have_posts()): while (have_posts()):the_post(); ?>
      			<h2> <?php the_title(); ?></h2>
      			<hr class="page_blog">
      			<p><em> 
      				By <span class="bold"><?php the_author(); ?></span> 
      				on <span class="date"><?php echo the_time('l,F jS, Y'); ?> </span>
      				in <span class="category"><?php the_category(', '); ?></span>, 
      				<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
      			</em></p>
      			
      			<?php the_content(); ?>
      			<hr>
      			<?php comments_template(); ?>
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
      	
      		<div class="navigation">
      				<div class="alignright">
					<?php next_post_link(); ?>
					</div>
					<div class="alignleft">
					<?php previous_post_link(); ?>	
					</div>
			</div> <!-- end navigation -->
      		</article>
      		
      		
      </div>
      		
      
    
      
      <?php get_sidebar('blog'); ?>
   
    </div> <!-- end row -->
</div>   <!-- end wrapper -->



<?php get_footer(); ?>   
    
