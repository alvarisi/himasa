<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Dashboard</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="<?php echo base_url()?>admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="<?php echo base_url()?>admin/assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>admin/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>admin/assets/css/icons.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url()?>admin/assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="<?php echo base_url()?>admin/assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>admin/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/sparkline/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/blockui/jquery.blockUI.min.js"></script>

	<!-- Pickers -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/noty/themes/default.js"></script>

	<!-- Slim Progress Bars -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/nprogress/nprogress.js"></script>

	<!-- Bootbox -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/plugins/bootbox/bootbox.js"></script>

	<!-- App -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/assets/js/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/assets/js/plugins.form-components.js"></script>

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	<!-- Demo JS -->
	<script type="text/javascript" src="<?php echo base_url()?>admin/assets/js/custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>admin/assets/js/demo/ui_general.js"></script>
</head>

<body>

	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				
				Administrator
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="<?php echo base_url(); ?>admin/assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username">Options</span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li class="divider"></li>
						<li><a href="<?php echo base_url() ?>index.php/office/logout"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

	</header> <!-- /.header -->

	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">
				<ul id="nav">
					
					<li>
						<a href="<?php echo base_url() ?>index.php/office/">
							<i class="icon-dashboard"></i>
							Dashboard
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Berita
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?php echo base_url() ?>index.php/office/addnews">
								<i class="icon-angle-right"></i>
								Tambah Berita
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>index.php/office/listnews">
								<i class="icon-angle-right"></i>
								Daftar Berita
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>index.php/office/category">
								<i class="icon-angle-right"></i>
								Kategori
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Donatur dan Sponsor
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?php echo base_url() ?>index.php/office/adddonatur">
								<i class="icon-angle-right"></i>
								Tambah Donatur
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>index.php/office/listreqdonatur">
								<i class="icon-angle-right"></i>
								Permintaan Donatur
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>index.php/office/listdonatur">
								<i class="icon-angle-right"></i>
								Daftar Donatur
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>index.php/office/sponsor">
								<i class="icon-angle-right"></i>
								Sponsor
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/rekap_donatur" target="_blank">
								<i class="icon-angle-right"></i>
								Download Rekap Donatur
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Data Anak
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/addchild">
								<i class="icon-angle-right"></i>
								Tambah Anak
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/listchild">
								<i class="icon-angle-right"></i>
								Daftar Anak
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/rekap_anak" target="_blank">
								<i class="icon-angle-right"></i>
								Download Rekap Anak
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Galeri
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/addgallery">
								<i class="icon-angle-right"></i>
								Tambah Gallery
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/listgallery">
								<i class="icon-angle-right"></i>
								Daftar Gallery
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Pesan Masuk
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/listpesan">
								<i class="icon-angle-right"></i>
								Daftar Pesan
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Personalisasi
						</a>
						<ul class="sub-menu">

							
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/frontpage">
								<i class="icon-angle-right"></i>
								Tampilah Depan
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>index.php/office/changepassword">
									<i class="icon-angle-right"></i>
									Ganti Password
								</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>
			<div id="divider" class="resizeable"></div>
		</div>