		<section id="content">
			
			<section class="section page-heading animate-onscroll">
				
				<h1>Visi Misi</h1>
				<p class="breadcrumb"><a href="<?php echo base_url() ?>">Home</a> / Visi Misi</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						
						<div class="row">
						
							<div class="col-lg-12 col-md-12 col-sm-12">
						
								<h3 class="animate-onscroll no-margin-top">VISI DAN MISI YAYASAN AR-ROHIM SAMBISARI</h3>								
								<p class="animate-onscroll">
									<ol>
										<li><h3>VISI</h3>
											Mengajak para donator  untuk lebih memperhatikan keadaan anak-anak yatim piatu, yatim dan piatu serta dhuafa supaya menjadi anak-anak yang berkualitas dan memiliki iman yang mulia, bertaqwa kepada Allah SWT, serta  ber-Akhlakul kharimah.
										</li>
										<li>
											<h3>MISI</h3>
											<ol style="list-style-type:upper-roman">
												<li>Membantu meringankan beban hidup anak-anak yatim piatu, yatim dan piatu serta Dhuafa</li>
												<li>Membantu mewujudkan impian anak-anak yatim piatu, yatim dan piatu serta Dhuafa dalam hal pendidikan</li>
												<li>Mendirikan Panti Asuhan sebagai tempat tinggal dan tempat belajar untuk anak-anak yatim piatu, yatim dan piatu serta Dhuafa</li>
												<li>Memberikan perlindungan serta rasa aman bagi anak asuh agar dapat menggali seluruh potensi diri yang dilandasi oleh norma – norma agama dan tatanan sosial kemasyarakatan</li>
											</ol>
										</li>
									</ol>
								</p>
								<p class="animate-onscroll" style="padding-left:40px;">
									&nbsp;
								</p>
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
										<img src="<?php
											if($row->gambarberita!="")
											{ 
											 echo base_url(); ?>content/berita/<?php echo $row->gambarberita; ?>" alt="" class="img-responsive img-thumbnail">
											<?php }else{
												echo base_url(); ?>content/gambar_yayasan.jpg" alt="" class="img-responsive img-thumbnail">
												<?php } ?>
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