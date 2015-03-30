		<section id="content">
			
			<section class="section page-heading animate-onscroll">
				
				<h1>Forum Alumni</h1>
				<p class="breadcrumb"><a href="<?php echo base_url() ?>">Home</a> / Forum Alumni</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
						
								<h3 class="animate-onscroll no-margin-top">Sudah Terdaftar? Login Disini. </h3>								
								<?php if($this->session->flashdata('gagallogin')){ ?>
								<div class="animate-onscroll alert-box <?php if($this->session->flashdata('gagallogin')){ ?> error <?php } ?>">
									<p>
										<?php if($this->session->flashdata('gagallogin')){ ?> <?php echo $this->session->flashdata('gagallogin'); ?> <?php } ?>
									</p>
								</div>
								<?php } ?>
								<form class="animate-onscroll" method="post" action="<?php echo base_url(); ?>index.php/alumni/submitLogin">
									<div class="row">

										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Username *</label>
											<input type="text" name="username" placeholder="Username Anda">
										</div>
									</div>
									<div class="row">

										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Password *</label>
											<input type="password" name="email" placeholder="Password Anda">
										</div>
									</div>
									<input type="submit" class="button donate" value="Masuk">
								</form>
								
							</div>
						</div>
					</div>			
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>