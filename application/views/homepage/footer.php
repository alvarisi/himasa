
			<div id="main-footer">
					
					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12 animate-onscroll" style="text-align:center;">
							<img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo" class="img-responsive">
							<p>Jl. Sambisari Utara No. 9 RT. 05 RW. III Kel. Lontar Kec. Sambikerep Surabaya<br>
							Telp. (031) 71602229, 081252902229, 082139959900, 081333155535
							<br>Email (1). <a href="mailto:arrohimsambisari@yahoo.com">arrohimsambisari@gmail.com</a>
							<br>Email (2). <a href="mailto:pa_arrohimsambisari@yahoo.com">pa_arrohimsambisari@yahoo.com</a></p>
							
						</div>
						
					</div>
					
				</div>
			
			<!-- Footer -->
			<footer id="footer">
				<!-- Lower Footer -->
				<div id="lower-footer">
					
					<div class="row">
						
						<div class="col-lg-6 col-md-6 col-sm-6 animate-onscroll">
						
							<p class="copyright">© 2014 Yayasan Panti Asuhan Ar-Rohim Sambisari. All Rights Reserved.</p>
							
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 animate-onscroll">
							
							<div class="social-media">
								<ul class="social-icons">
									<li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
									<li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
									<li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
									<li class="youtube"><a href="#" class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
									<li class="flickr"><a href="#" class="tooltip-ontop" title="Flickr"><i class="icons icon-flickr-4"></i></a></li>
									<li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
								</ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			
			</footer>
			<!-- /Footer -->
			
			
			
			<!-- Back To Top -->
			<a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>
			
			
			
			<!-- Customize Box -->
		
		</div>
		<!-- /Container -->	
	
		<!-- JavaScript -->
		<?php if($this->uri->segment(1)=="gallery") { ?>
		<!-- Bootstrap -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
		<!-- Sliders/Carousels -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.colorbox.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".foto").colorbox({rel:'foto', transition:"fade"});
			});
		</script>
		<!-- Main Script -->
		<?php }else{?>
		
		<!-- Bootstrap -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
		
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
		<!-- Sliders/Carousels -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
		
		<!-- Revolution Slider  -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
		
		
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsive-calendar.min.js"></script>
		
		<!-- Raty -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.raty.min.js"></script>
		
		<!-- Chosen -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
		
		<!-- jFlickrFeed -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jflickrfeed.min.js"></script>
		
		<!-- InstaFeed -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/instafeed.min.js"></script>
		

		
		<!-- MixItUp -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mixitup.js"></script>
		
		<!-- JackBox -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/jackbox/js/jackbox-packed.min.js"></script>
		
		<!-- CloudZoom -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/zoomsl-3.0.min.js"></script>
		
		<!-- ColorPicker -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/colorpicker.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
		
		<?php } ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-54246310-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script_ie.js"></script>
		<![endif]-->
		
		
	</body>

</html>