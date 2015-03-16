<!DOCTYPE html>
<html>
	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Judul -->
		<title>Yayasan </title>
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
		
		<!-- Stylesheets -->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/css/fontello.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/css/responsive-calendar.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/cloud-zoom.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/colorpicker.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/css/colorbox.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">

		
		<!--[if IE 9]>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ie9.css">
		<![endif]-->
		
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link href="<?php echo base_url(); ?>assets/css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ie.css">
        <![endif]-->
		
		<!--[if gt IE 8]>
			<link href="<?php echo base_url(); ?>assets/css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontello-ie7.css">
		<![endif]-->
		
		<!-- jQuery -->
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.4.min.js"></script>
		
		<!-- Preloader -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.queryloader2.min.js"></script>
	
	</head>
	<body class="tablet-sticky-header boxed-layout">
		<!-- Container -->
		<div class="container">
			<!-- Header -->
			<header id="header" class="animate-onscroll">
				<!-- Main Header -->
				<div id="main-header">
					<div class="container">
					<div class="row">
						<!-- Logo -->
						<div id="logo" class="col-lg-2 col-md-2 col-sm-2">
							<a href=""><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo"></a>
						</div>
						<!-- /Logo -->
						<div class="col-lg-6 col-md-5 col-sm-5">
							<h3>YAYASAN PANTI ASUHAN AR-ROHIM SAMBISARI</h3>
							<p>Jl. Sambisari Utara No. 9 RT. 05 RW. III Kel. LontarKec. Sambikerep Surabaya<br>
								Telp. (031) 71602229, 081252902229, 082139959900, 081333155535
							</p>
						</div>
						<div class="col-lg-4 col-md-5 col-sm-5">
							<form id="newsletter" action="#" method="POST">
								<h5><strong>Pencarian</strong></h5>
								<div class="newsletter-form">
									<div class="search">
										<input type="text" name="cari" placeholder="Ketik disini..">
									</div>
									<div class="newsletter-submit">
										<input type="submit" value="">
										<i class="icons icon-search"></i>
									</div>
								</div>
							</form>
						</div>
					</div>
					</div>
				</div>
				<!-- /Main Header -->
				<!-- Lower Header -->
				<div id="lower-header">
					
					<div class="container">
					
					<div id="menu-button">
						<div>
						<span></span>
						<span></span>
						<span></span>
						</div>
						<span>Menu</span>
					</div>
					<ul id="navigation">
						<li class="home-button current-menu-item">
							<a href="<?php echo base_url() ?>"><i class="icons icon-home"></i></a>
						</li>
						<li >
							<span>Profil Yayasan</span>
							<ul>
								<li><a href="<?php echo base_url() ?>mukadimah">Mukadimah</a></li>
								<li><a href="<?php echo base_url() ?>visimisi">Visi Misi</a></li>
								<li><a href="<?php echo base_url() ?>infoyayasan">Informasi Yayasan</a></li>
								<li><a href="<?php echo base_url() ?>strukturyayasan">Susunan Pengurus</a></li>
								<li><a href="<?php echo base_url() ?>legalitas">Surat Legalitas</a></li>
								<li><a href="<?php echo base_url() ?>programkerja">Program Kerja</a></li>
								<li><a href="<?php echo base_url() ?>fasilitas">Fasilitas</a></li>
							</ul>
						</li>
						<li >
							<span>Layanan Donatur</span>
							<ul>
								<li><a href="<?php echo base_url() ?>cara-menyumbang">Cara Menyumbang</a></li>
								<li><a href="<?php echo base_url() ?>konfirmasi-transfer">Konfirmasi Transfer</a></li>
								<li><a href="<?php echo base_url() ?>sponsor-kami">Sponsor Kami</a></li>
								<li><a href="<?php echo base_url() ?>doa-donatur">Doa Untuk Donatur</a></li>
							</ul>
						</li>
						<li >
							<a href="<?php echo base_url() ?>daftaranak"><span>Daftar Anak Yatim</span></a>
						</li>
						<li >
							<a href="<?php echo base_url() ?>gallery"><span>Galeri</span></a>
						</li>
						<li >
							<span>Kontak Kami</span>
							<ul>
								<li><a href="<?php echo base_url() ?>kontak-kami">Kontak Kami</a></li>
								<li><a href="<?php echo base_url() ?>kritik-saran">Kritik dan Saran</a></li>
							</ul>
						</li>
						<li class="donate-button ">
							<a href="<?php echo base_url() ?>cara-menyumbang">Donasi Sekarang</a>
						</li>
					</ul>
					</div>
				</div>
				<!-- /Lower Header -->
			</header>
			<!-- /Header -->
		<section id="content">
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>Gallery</h1>
				<p class="breadcrumb"><a href="<?php echo base_url(); ?>">Home</a> / Gallery</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						
						<div class="media-items row">
							<?php foreach ($gallery->result() as $row) { ?>
							<div class="col-lg-4 col-md-4 col-sm-6">
							<!-- Media Item -->
							<div class="media-item animate-onscroll">
								<div class="media-image">
									<img src="<?php echo base_url(); ?>content/gallery/<?php echo $row->foto; ?>" alt="">
									<div class="media-hover">
										<div class="media-icons">
											<a href="<?php echo base_url(); ?>content/gallery/<?php echo $row->foto; ?>"  class="foto media-icon"><i class="icons icon-zoom-in"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Media Item -->							
							</div>				
							<?php } ?>
						</div>
						
						
						<div class="animate-onscroll">
						
							<div class="divider"></div>
							
							<div class="my_pagination">
								<?php echo $this->pagination->create_links(); ?>
							</div>
						
						</div>
						
					</div>
					
					
				
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>


			
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
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script_ie.js"></script>
		<![endif]-->
		
		
	</body>

</html>