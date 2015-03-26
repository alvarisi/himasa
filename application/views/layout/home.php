<!DOCTYPE html>
<html>
	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Fatahillah Alvarisi" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, use-scalable=0"> 
        <meta name="format-detection" content="telephone=no">
		
		<!-- Judul -->
		<title>HIMASA Jember</title>
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
		<?php foreach ($stylesheets as $row) {
			echo css($row);
		} ?>
		
		<!-- jQuery -->
		<?php foreach ($javascripts as $row) {
			echo js($row);
		} ?>
		<script>
		$(document).ready(function(){
			$('#tanggal').mask("00-00-0000", {placeholder: "hh-bb-tttt"});
			$('#money').mask('000.000.000.000.000', {reverse: true});
		});
		</script>
		
	</head>
	<body class="tablet-sticky-header boxed-layout">
		<!-- Container -->
		<div class="container">
			<?= $nav ?>
			<section id="content">	
				<?= $content ?>
			</section>

			<div id="main-footer">
					
					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12 animate-onscroll" style="text-align:center;">
							<img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo" class="img-responsive" width='5%' height='5%'>
							<p>
							HIMASA Jember	
							</p>
							
						</div>
						
					</div>
					
				</div>
			
			<!-- Footer -->
			<footer id="footer">
				<!-- Lower Footer -->
				<div id="lower-footer">
					
					<div class="row">
						
						<div class="col-lg-6 col-md-6 col-sm-6 animate-onscroll">
						
							<p class="copyright">All Rights Reserved.</p>
							
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 animate-onscroll">
							
							<div class="social-media">
								<ul class="social-icons">
									<li class="facebook"><a href="https://www.facebook.com/groups/503438189699809/?fref=ts" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
									<li class="twitter"><a href="https://twitter.com/metallio2015" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
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
			<a href="#" id="button-to-top"><i class="glyphicon glyphicon-triangle-top"></i></a>
			
			
			
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
		<!--[if lt IE 9]>
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script_ie.js"></script>
		<![endif]-->
		
		
	</body>

</html>