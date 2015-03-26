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
