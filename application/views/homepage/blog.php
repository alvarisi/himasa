		<section id="content">
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h2><?php echo stripslashes($berita->judulberita); ?></h2>
				<p class="breadcrumb"><a href="<?php echo base_url() ?>">Home</a> / <?php echo substr(stripslashes($berita->judulberita), 0,50); ?></p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<!-- Single Blog Post -->
						<div class="blog-post-single fullwidth-post">
							
							<div class="post-side-meta animate-onscroll">
										
								<div class="date">
									<span class="day"><?php $date= new DateTime($berita->waktuberita); echo $date->format('d'); ?></span>
									<span class="month"><?php $date= new DateTime($berita->waktuberita); echo $date->format('M'); ?></span>
								</div>
								<div class="post-comments">
										<span class="month">Bagikan</span>
									</div>
								<div class="a2a_kit">
									
									<div class="post-comments">
										<a class="a2a_button_facebook">
								        	<img src="http://farm3.staticflickr.com/2863/12004329833_ddcd67ff4a_o.png" border="0" alt="Facebook" width="54" height="55"/>
								    	</a>
									</div>
								    <div class="post-comments">
										<a class="a2a_button_twitter">
								        	<img src="http://farm3.staticflickr.com/2886/12004329883_8daa4af904_o.png" border="0" alt="Twitter" width="54" height="55"/>
								    	</a>
									</div>
									<div class="post-comments">
										<a class="a2a_button_google_plus">
									        <img src="http://farm4.staticflickr.com/3774/12004033365_8965d86637_o.png" border="0" alt="Google+" width="54" height="55"/>
									    </a>
									</div>
								    <div class="post-comments">
										<a class="a2a_dd" href="http://www.addtoany.com/share_save">
									        <img src="http://farm8.staticflickr.com/7326/12005120763_a44dc82111_o.png" border="0" alt="Share" width="54" height="55"/>
									    </a>
									</div>
								    
								    
								</div>

								<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
							</div>
							<?php if($berita->gambarberita != "") { ?> 
								<img src="<?php echo base_url() ?>content/berita/<?php echo $berita->gambarberita; ?>" class="img-responsive">
							<?php }else{ ?>
								<img src="<?php echo base_url() ?>content/gambar_yayasan.jpg"  class="img-responsive" width="400">
							<?php } ?>
							<div class="post-meta animate-onscroll">
								<span>oleh <a href="#">admin</a></span>
								<span>kategori <a href="#"><?php echo $berita->namakategori; ?></a></span>
							</div>
							
							<div class="post-content">
								
								<p class="animate-onscroll no-margin-bottom">
									<?php echo stripslashes($berita->isiberita); ?>	
								</p>
								
							</div>
							
							
						</div>
						<!-- /Single Blog Post -->
							
						
							
						<!-- Berita Lainnya -->
						<div class="related-articles">
							
							<h3>Berita Lainnya</h3>
							
							<div class="row">
								<?php 
									$count=1; 
									foreach ($berita_terakhir as $row) {
										if($row->idberita==$curr_idberita){
											continue;
										}
										if($count++==4)
										{
											break;
										}
								 ?>								
								<div class="col-lg-3 col-md-3 col-sm-6">
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<?php
											$gmb = base_url().'content/gambar_yayasan.jpg';
											if($row->gambarberita!="")
											{ 
											 $gmb= base_url().'content/berita/'.$row->gambarberita; 
											}
											?>

										<img src='<?php echo $gmb; ?>' width="150px;">
										</div>
										
										<h4 class="post-title"><a href="<?php echo base_url() ?>main/blog/<?php echo $row->idberita; ?>"><?php echo substr($row->judulberita, 0,25)."...";?></a></h4>
										
										<div class="post-meta">
											<span>by admin</span>
											<span><?php $date= new DateTime($row->waktuberita); echo $date->format('l, d M Y'); ?></span>
										</div>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<?php } ?>
							</div>
							
						</div>
						<!-- /Related Articles -->
						
					</div>
					
					
					
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>