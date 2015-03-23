		<section id="content">
			
			<section class="section page-heading animate-onscroll">
				
				<h1>Kontak Kami</h1>
				<p class="breadcrumb"><a href="<?php echo base_url() ?>">Home</a> / Kontak Kami</p>
				
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
						
								<h3 class="animate-onscroll no-margin-top">Kontak Kami</h3>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<?php 
											echo $front->kontak;
										?>
									</div>
								</div>
								<br>
								<h3 class="animate-onscroll no-margin-top">Form Kritik dan Saran</h3>								
								<?php if($this->session->flashdata('gagalpesan') || $this->session->flashdata('suksespesan')){ ?>
								<div class="animate-onscroll alert-box <?php if($this->session->flashdata('suksespesan')){ ?> success <?php } ?> <?php if($this->session->flashdata('gagalpesan')){ ?> error <?php } ?>">
									<p>
										<?php if($this->session->flashdata('suksespesan')){ ?> <?php echo $this->session->flashdata('suksespesan'); ?> <?php } ?>
										<?php if($this->session->flashdata('gagalpesan')){ ?> <?php echo $this->session->flashdata('gagalpesan'); ?> <?php } ?>
									</p>
								</div>
								<?php } ?>
								<form class="animate-onscroll" method="post" action="<?php echo base_url(); ?>index.php/main/addmessage">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Nama *</label>
											<input type="text" name="nama" placeholder="Nama Anda">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<label>Email *</label>
											<input type="text" name="email"  placeholder="Email Anda">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<label>Website</label>
											<input type="text" name="web" placeholder="Website Anda (Jika Ada)">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Pesan *</label>
											<textarea name="pesan"></textarea>
										</div>
									</div>
									<input type="submit" class="button donate" value="Kirim">
									<input type="reset" class="button" value="reset">
								</form>
								
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