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
 
        <!-- 
<div class="row">
            <div class="col-sm-6 text-center">
                <div class="block firstrow first-img-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/blue-rect.png" />
                	<div class="caption">
                        <div class='textOverlay flex-center-vertically'>
                        	<div class='button see-map margin-top10'><a href="map.html">See Map</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="block firstrow rest-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/gray-square.png" />
                	<div class="caption">
                        <div class='textOverlay flex-center-vertically'>
                        	<h2> About Map </h2>
                        	<hr class='hr-about'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="block firstrow last-img-of-row">
                	<div class='overlay-effect'>
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/green-square.png" />
                        	<figcaption>
                        		<h3> Injured / Dead  Turtles</h3>
                        		<div class='button stranding margin-stranding'><a href="stranding.html">Submission</a></div>
                        	</figcaption>
                    </div>
                </div>
            </div>
        </div>
        <!~~ /.row ~~>
         
         <div class="row">
            <div class="col-sm-3 text-center">
                <div class="block first-img-of-row">
                	<div class='overlay-effect'>
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/black-square.png" />
                        	<figcaption>
                        		<h2 id="turtle-spp-title"> Sea Turtles </h2>
                        		<p>Species in Okinawa</p>
                        		<div class='button turtle-id margin-turtleid'><a href="id.html">See Turtle ID</a></div>
                        	</figcaption>
                        </div>
                    
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="block rest-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/loggerhead.png" />
						<div class='textOverlay flex-center-vertically'>
							<h3>Loggerhead Sea Turtle<br>あかウミガメ</h3>
						</div>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="block rest-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/green.png" />
                		<div class='textOverlay flex-center-vertically'>
                        	<h3>Green Sea Turtle<br>あおウミガメ</h3>
                        </div>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="block last-img-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/hawksbill.png" />
                		<div class='textOverlay flex-center-vertically'>
                        	<h3>Hawksbill Sea Turtle<br>たいまいウミガメ</h3>
                        </div>
                </div>
            </div>
        </div>
        <!~~ /.row ~~>
        
         <div class="row">
            <div class="col-sm-6 text-center">
                <div class="block first-img-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/green-rect.png" />
                	<div class="caption">
                        <div class='textOverlay flex-center-vertically'>
                        	<h2> About </h2>
                        	<hr class='hr-about'>
								<p class='margin-left20 margin-right20'>
									All 7 species of marine turtles are listed on Appendix I of CITES. 
									3 are classified as critically endangered by IUCN and a further 3 are classified as endangered.
								</p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="block last-img-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/gray-rect.png" />
                	<div class="caption">
                        <div class='textOverlay flex-center-vertically'>
                        	<h2> Blog </h2>
                        	<hr class='hr-about'>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <!~~ /.row ~~>
          <div class="row">
            <div class="col-sm-3 text-center">
                <div class="block first-img-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/black-square.png" />
                     <figcaption> 
                     	<h2>Plastic Bags </h2>
                     </figcaption>
                    
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="block rest-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/black-square.png" />
                     <figcaption> 
                     	<h2>Straws </h2>
                     </figcaption>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="block rest-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/black-square.png" />
                     <figcaption> 
                     	<h2> Trash </h2>
                     </figcaption>
                </div>
            </div>
            <div class="col-sm-3 text-center">
                <div class="block last-img-of-row">
                	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/black-square.png" />
                     <figcaption> 
                     	<h2>Balloons </h2>
                     </figcaption>
                </div>
            </div>
        </div>
        <!~~ /.row ~~>
 -->
    
    
    </div> <!-- /.wrapper -->


   
   
 



   




<?php get_footer(); ?>   