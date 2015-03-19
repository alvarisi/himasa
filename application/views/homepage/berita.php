		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1><?php echo $hasil; ?></h1>
				<p class="breadcrumb"><a href="main-v1.html">Home</a> / <?php echo $hasil; ?></p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-8 col-md-8 col-sm-12 col-lg-push-2 col-lg-pull-2 col-md-push-2 col-md-pull-2">
						
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">

							<?php 
							$news = $berita->result();
							if(!isset($news) && $news != "")
							{
								foreach ($berita->result() as $row) { ?>
								
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
																			<div class="post-image">
																					<img src="<?php echo base_url(); ?>content/berita/<?php echo $row->gambarberita; ?>" alt="" class="img-responsive">
																					<div class="media-hover">
											</div>
										</div>
																			
										<div class="post-content">
											
											<div class="post-side-meta">
											
												<div class="date">
													<span class="day"><?php $date= new DateTime($row->waktuberita); echo $date->format('d'); ?></span>
													<span class="month"><?php $date= new DateTime($row->waktuberita); echo $date->format('M'); ?></span>
												</div>
											</div>
											
											<div class="post-header">
												<h2><a href="<?php echo base_url() ?>main/blog/<?php echo $row->idberita; ?>"><?php echo stripslashes($row->judulberita); ?></a></h2>
												<div class="post-meta">
													<span>by <a href="#">admin</a></span>
													<span>in <a href="#"><?php echo $row->namakategori; ?></a></span>
												</div>
											</div>
											
											<div class="post-exceprt">
												<p><?php echo substr(stripslashes($row->isiberita),0,200); ?><?php if(strlen($row->isiberita) > 198) echo "....."; ?></p>
												<a href="<?php echo base_url() ?>main/blog/<?php echo $row->idberita; ?>" class="button read-more-button big button-arrow">Lihat Selengkapnya</a>
											</div>
										</div>
									</div>
									<div class="divider"></div>
									<br>
								<?php } 
							}
							else echo "<h3>Hasil tidak ditemukan</h3>";
							?>
							</div>
							
							
						</div>
						<div class="animate-onscroll">
							<div class="my_pagination">
								<?php echo $this->pagination->create_links(); ?>
							</div>
						</div>
					</div>
					
					
					
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>