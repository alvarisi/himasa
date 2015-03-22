		<section id="content">
			
			<section class="section page-heading animate-onscroll">
				
				<h1>Form Edit Alumni</h1>
				<p class="breadcrumb"><a href="<?php echo base_url() ?>">Home</a> / Form Edit Alumni</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-6 col-lg-offset-3 col-md-offset-3 col-md-6 col-sm-12">
						
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
						
								<h3 class="animate-onscroll no-margin-top">Form Edit</h3>								
								<?php if($this->session->flashdata('gagalpassword') || $this->session->flashdata('suksespassword')){ ?>
								<div class="animate-onscroll alert-box <?php if($this->session->flashdata('suksespassword')){ ?> success <?php } ?> <?php if($this->session->flashdata('gagalpassword')){ ?> error <?php } ?>">
									<p>
										<?php if($this->session->flashdata('suksespassword')){ ?> <?php echo $this->session->flashdata('suksespassword'); ?> <?php } ?>
										<?php if($this->session->flashdata('gagalpassword')){ ?> <?php echo $this->session->flashdata('gagalpassword'); ?> <?php } ?>
									</p>
								</div>
								<?php } ?>
								<form class="animate-onscroll" method="post" action="<?php echo base_url(); ?>index.php/alumni/submitPassword">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Password Lama *</label>
											<input type="password" name="oldpassword" placeholder="Password lama Anda">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Password Baru *</label>
											<input type="password" name="password" placeholder="Password Baru Anda">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Konfirmasi Password Baru *</label>
											<input type="password" name="cpassword" placeholder="Konfirmasi Password Baru Anda">
										</div>
									</div>
									<input type="submit" class="button donate" value="Ganti Password">
								</form>
							</div>
						</div>
					</div>		
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>