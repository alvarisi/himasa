
			<header id="header" class="animate-onscroll">
				<!-- Main Header -->
				<div id="main-header">
					<div class="container">
					<div class="row">
						<!-- Logo -->
						<div id="logo" class="col-lg-2 col-md-2 col-sm-2">
							<a href=""><img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo"></a>
						</div>
						<!-- /Logo -->
						<div class="col-lg-7 col-md-7 col-sm-7">
							<h3>HIMASA Jember</h3>
							<p>Himpunan Mahasiswa Surabaya asal Jember
							</p>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3">
							<form id="newsletter" action="<?php echo base_url(); ?>main/berita" method="POST">
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
							<a href="<?php echo base_url() ?>"><i class="glyphicon glyphicon-home"></i></a>
						</li>
						<li >
							<span>Profil</span>
							<ul>
								<li><a href="<?php echo base_url() ?>"></a></li>
								
							</ul>
						</li>
						<li >
							<a href="<?php echo base_url() ?>gallery"><span>Galeri</span></a>
						</li>
						<li >
							<a href="<?php echo base_url() ?>berita"><span>Berita</span></a>
						</li>
						<li >
							<a href="<?php echo base_url() ?>kontak-kami"><span>Kontak Kami</span></a>
						</li>
						<li class="thread-button ">
							<a href="<?php echo base_url() ?>thread">Thread</a>
						</li>
						<li class="donate-button ">
							<a href="<?php echo base_url() ?>alumni">Dashboard</a>
						</li>
						<li class="home-button">
							<a href="<?php echo base_url() ?>index.php/alumni/logout"><i class="glyphicon glyphicon-log-out"></i></a>
						</li>
					</ul>
					</div>
				</div>
				<!-- /Lower Header -->
			</header>