		<section id="content">
			
			<section class="section page-heading animate-onscroll">
				
				<h1>Kontak Kami</h1>
				<p class="breadcrumb"><a href="<?php echo base_url() ?>">Home</a> / Profil</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						
						<div class="row">
						
							<div class="col-lg-12 col-md-12 col-sm-12">
						
								<p>&nbsp;</p>
							</div>
						</div>
						<div class="row">
						
							<div class="col-lg-12 col-md-12 col-sm-12">
						
								<h3 class="animate-onscroll no-margin-top">Logo</h3>
								<img src="<?php echo base_url(); ?>content/profil/<?php echo $front->logo?>" class="img-responsive"><br>
								<h3 class="animate-onscroll no-margin-top">Sejarah</h3>
								<p><?php echo $front->sejarah; ?></p>
								<h3 class="animate-onscroll no-margin-top">Pengurus</h3>
								<img src="<?php echo base_url(); ?>content/profil/<?php echo $front->organigram?>" class="img-responsive"><br>
								<h3 class="animate-onscroll no-margin-top">Visi</h3>
								<p><?php echo $front->visi; ?></p>
								<h3 class="animate-onscroll no-margin-top">Misi</h3>
								<p><?php echo $front->misi; ?></p>
								<h3 class="animate-onscroll no-margin-top">Sambutan Ketua</h3>
								<p><?php echo $front->sambutan; ?></p>
								
							</div>
						</div>
					</div>
					
					
					
					<!-- Sidebar -->
					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">
						<!-- Popular News -->
						<div class="sidebar-box white animate-onscroll">
							<h3>Berita Terakhir</h3>
							<ul class="popular-news">
								<?php foreach ($berita as $row) { ?>
								<!-- Blog Item -->
								<li>
									<div class="thumbnail">
										<?php
											$gmb = base_url().'content/gambar_yayasan.jpg';
											if($row->gambarberita!="")
											{ 
											 $gmb= base_url().'content/berita/'.$row->gambarberita; 
											}
											?>

										<img src='<?php echo $gmb; ?>' width="150px;">
									</div>
									
									<div class="post-content">
										<h6><a href="<?php echo base_url() ?>main/blog/<?php echo $row->idberita; ?>"><?php echo substr(stripslashes($row->judulberita),0,15); ?><?php if(strlen($row->judulberita) > 15) echo "..."; ?></a></h6>
										<div class="post-meta">
											<span>oleh <a href="#">admin</a></span>
											<span><?php $date= new DateTime($row->waktuberita); echo $date->format('l, d M Y'); ?></span>
										</div>
									</div>
								</li>
								<!-- /Blog Item -->
								<?php } ?>
							</ul>
							
						</div>
						<!-- /Popular News -->						
					</div>
					<!-- /Sidebar -->
					
					
					
				
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>