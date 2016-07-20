<?php get_header(); ?>



<section class="module parallax parallax-2">		
	<h1> Sea Turtles of Okinawa </h1>
</section>


	
	<div class="wrapper">
      
     <div class="row">
      <div class="col-lg-9 padding-right-20">
      	
      
			
      		
      		<?php if (have_posts()): while (have_posts()):the_post(); ?>
      			<article class="post">
      			
      				<h2> <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      				<hr class="page_blog">
      				<p><em> 
      				By <span class="bold author"><?php the_author(); ?></span> 
      				on <span class="date"><?php echo the_time('l,F jS, Y'); ?> </span>
      				in <span class="category"><?php the_category(', '); ?></span>, 
      				 <span class="comment"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
      				</em></p>
      				<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('medium');
						} 
					?>
      				<?php the_excerpt(); ?>
      				
      			</article>
      			
      				
      			
      		<?php endwhile; else: ?>
      		
      		<?php endif; ?>
      	
 	</div>
 	
 	 <?php get_sidebar('blog'); ?>
      
    </div> <!-- /.row -->
</div> <!-- /.wrapper -->


<?php get_footer(); ?>   