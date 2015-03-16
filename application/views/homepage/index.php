		<section id="content">
			<!-- Section -->
			<section class="section full-width-bg">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<!-- Main Slider -->
						<div class="flexslider main-flexslider animate-onscroll">
							<ul class="slides">
								<li id="main_flex_1">
									<div class="slide align-<?php echo $front->rata; ?>">
										<h2><?php echo stripslashes($front->katadepan); ?></h2>
										<p><?php echo stripslashes($front->deskripsi); ?></p>
									</div>
								</li>								
							</ul>
						</div>	
						<!-- /Main Slider -->
					</div>
				</div>
				
			</section>
			<!-- /Section -->
			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						<!-- Owl Carousel -->
						<div class="owl-carousel-container">
							
							<div class="owl-header">
								
								<h3 class="animate-onscroll">Galeri Terakhir</h3>
								
								<div class="carousel-arrows animate-onscroll">
									<span class="left-arrow"><i class=" glyphicon glyphicon-triangle-left"></i></span>
									<span class="right-arrow"><i class="glyphicon glyphicon-triangle-right"></i></span>
								</div>
								
							</div>
							
							<div class="owl-carousel" data-max-items="4">
										<?php foreach ($gallery as $row) { ?>
								<div>
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="<?php
											if($row->foto!="")
											{ 
											 echo base_url(); ?>content/gallery/<?php echo $row->foto; ?>" width="200px" height="200px" class="">
											<?php }else{
												echo base_url(); ?>assets/img/logo.png" alt="" class="" width="200px" height="200px">
												<?php } ?>
										</div>
										<h4 class="post-title"><a href="<?php echo base_url() ?>gallery"><?php echo substr(stripslashes($row->judul), 0, 100); ?></a></h4>
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
							<?php } ?>
							</div>
						
						</div>
						<div class="owl-carousel-container">
							
							<div class="owl-header">
								
								<h3 class="animate-onscroll">Berita Terakhir</h3>
								
								<div class="carousel-arrows animate-onscroll">
									<span class="left-arrow"><i class="glyphicon glyphicon-triangle-left"></i></span>
									<span class="right-arrow"><i class="glyphicon glyphicon-triangle-left"></i></span>
								</div>
								
							</div>
							
							<div class="owl-carousel" data-max-items="4">
										<?php foreach ($berita as $row) { ?>
											
										
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="<?php
											if($row->gambarberita!="")
											{ 
											 echo base_url(); ?>content/berita/<?php echo $row->gambarberita; ?>" width="200px" height="200px" class="">
											<?php }else{
												echo base_url(); ?>content/gambar_yayasan.jpg" alt="" class="" width="200px" height="200px">
												<?php } ?>
										</div>
										
										<h4 class="post-title"><a href="<?php echo base_url() ?>main/blog/<?php echo $row->idberita; ?>"><?php echo substr(stripslashes($row->judulberita), 0, 100); ?><?php if(strlen($row->isiberita) > 100) echo "....."; ?></a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span><?php $date= new DateTime($row->waktuberita); echo $date->format('l, d M Y'); ?></span>
										</div>
										
										<p><?php echo substr(stripslashes($row->isiberita), 0, 50); ?><?php if(strlen($row->isiberita) > 50) echo "....."; ?></p>
										
										<a href="<?php echo base_url() ?>main/blog/<?php echo $row->idberita; ?>" class="button read-more-button big button-arrow">Selengkapnya</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
							<?php } ?>
							</div>
						
						</div>
						<!-- /Owl Carousel -->						<!-- Banner Rotator 
						<div class="banner-rotator animate-onscroll">
							
							<div class="flexslider banner-rotator-flexslider">
								
								<ul class="slides">
									<?php foreach ($gallery as $row) { ?>
										
									
									<li id="">
										<div class="banner-rotator-content">
											<h5></h5>
											<h4><?php echo $row->judul ?></h4>
											<span class="date"></span>
											<a href="<?php echo base_url() ?>gallery" class="button big button-arrow">Selengkapnya</a>
										</div>
									</li>
									<?php } ?>
								</ul>
								
							</div>
						
						</div>
						<!-- /Banner Rotator -->						
						
					</div>
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>