		<section id="content">
			
			<section class="section page-heading animate-onscroll">
				
				<h1>Forum</h1>
				<p class="breadcrumb"><a href="<?php echo base_url() ?>">Home</a> / Forum</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="panel panel-default">
							<div class="panel-heading">Form Forum</div>
						  <div class="panel-body">
						  	<?php if($this->session->flashdata('gagalthread') || $this->session->flashdata('suksesthread')){ ?>
								<div class="animate-onscroll alert-box <?php if($this->session->flashdata('suksesthread')){ ?> success <?php } ?> <?php if($this->session->flashdata('gagalthread')){ ?> error <?php } ?>">
									<p>
										<?php if($this->session->flashdata('suksesthread')){ ?> <?php echo $this->session->flashdata('suksesthread'); ?> <?php } ?>
										<?php if($this->session->flashdata('gagalthread')){ ?> <?php echo $this->session->flashdata('gagalthread'); ?> <?php } ?>
									</p>
								</div>
								<?php } ?>
						    <form class="animate-onscroll" method="post" action="<?php echo base_url(); ?>index.php/forum/store" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<label>Judul *</label>
										<input type="text" name="judul" placeholder="Judul Forum">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<label>Gambar *</label>
										<input type="file" name="file">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<label>Deskripsi *</label>
										<textarea name="description" class="wysiwyg"></textarea>
									</div>
								</div>
								<input type="submit" class="button donate" value="Kirim">
								<input type="reset" class="button" value="reset">
							</form>
						  </div>
						</div>
					</div>		
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>