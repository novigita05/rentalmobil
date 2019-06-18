<div class="services">
		<div class="container">
			<div class="wthree_title_agile">
				<h3><span> PRODUK </span></h3>
			</div>
			<div class="inner_w3l_agile_grids">
			<?php foreach ($produk as $produk_item): ?>
				<div class="col-md-4 agileits_service_grid_btm_left">
					<div class="agileits_service_grid_btm_left1">
						<div class="agileits_service_grid_btm_left2">
							<h5><?php echo $produk_item['merkmobil']; ?></h5>
							<p> Harga <span> Rp </span><?php echo $produk_item['harga']; ?></p>
							<p>Nopol : <?php echo $produk_item['nopol']; ?></p>
							
						</div>
					</div>
					&nbsp; &nbsp;
				</div>

				<?php endforeach; ?>
			</div>
			
		</div>
</div>
	<!--//service-section-->


<!--//team-section-->
<div class="middile" id="team">
	<div class="container">
		<div class="wthree_title_agile two">
		    <h3> Admin</span></h3>
		</div>
		<div class="inner_w3l_agile_grids">
		<!-- Flipster List -->
		<div class="flipster">
		  		<div class="about-grid-agile">
					<div class="about-head-w3">
						<h3> Admin </h3>
					</div>
					<div class="about-bottom">
						<div class="about-bottom-bottom">
								<p> Novi Gita Chayani <br>
									173140914111031 </p>
						</div>
						
					</div>
				</div>
				</div>
		  
		</div>
<!-- End Flipster List -->	
		
			</div>	
			
	</div>
</div>
<!--//team-section-->

<!-- /contact -->
<!-- //contact -->
	<div class="w3_agile_address">
		<div class="container">
				
			<div class="w3ls_footer_grid">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Find Us On:</h4>
						<p> Jalan Veteran No 17 Malang</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl email">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr ">
						<h4>Email Us On:</h4>
						<a href="gmail.com"> novi@gmail.com</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Call Us On:</h4>
						<p> 087 777 355 355 </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>



	
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--scripts--> 
<!-- Counter required files -->
		<script type="text/javascript" src="js/dscountdown.min.js"></script>
		<script src="js/demo-1.js"></script>
		<script>
			jQuery(document).ready(function($){						
				$('.demo2').dsCountDown({
					endDate: new Date("December 24, 2020 23:59:00"),
					theme: 'black'
					});								
			});
		</script>
	<!-- //Counter required files -->

	<!--//scripts--> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<script src="js/modernizr.custom.js"></script>
		
							
	<script src="js/jquery.flipster.js"></script>
<script>

	$(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });


</script>	
<!--banner Slider starts Here-->
							 <!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :5,
									itemsDesktop : [768,4],
									itemsDesktopSmall : [414,3],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination :false,
									
							      });
								  
							    });
							    </script>
								 <!--//required-js-files-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap.js"></script>
