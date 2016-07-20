  <script>
  	
  	jQuery(document).ready(function( $ ) {
  		$(".menu-opener").click(function(){
		  $(".menu-opener, .menu-opener-inner, .menu").toggleClass("active");
		  $('.menu-inner li').css('display','inline');
		  
		  if($(".menu-opener").hasClass('active')){
		  	$('.menu-inner li').css('display','inline');
		  }else{
		  	$('.menu-inner li').css('display','none');
		  }
		  
		});
		
		$('.menu-link li').mouseover(function(){
			$('.menu-link li').css('cursor','pointer');
		});
		
		
		
		

	});
  </script>
  
  <?php wp_footer(); ?>

  </body><!-- end body -->
  
   <div id="footer">
   		<p class='text-center'> Okinawa Sea Turtles 2016 </p>
   </div>
</div> <!-- end #container -->