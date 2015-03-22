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
								<?php if($this->session->flashdata('gagaledit') || $this->session->flashdata('suksesedit')){ ?>
								<div class="animate-onscroll alert-box <?php if($this->session->flashdata('suksesedit')){ ?> success <?php } ?> <?php if($this->session->flashdata('gagaledit')){ ?> error <?php } ?>">
									<p>
										<?php if($this->session->flashdata('suksesedit')){ ?> <?php echo $this->session->flashdata('suksesedit'); ?> <?php } ?>
										<?php if($this->session->flashdata('gagaledit')){ ?> <?php echo $this->session->flashdata('gagaledit'); ?> <?php } ?>
									</p>
								</div>
								<?php } ?>
								<form class="animate-onscroll" method="post" action="<?php echo base_url(); ?>index.php/alumni/update">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Angkatan *</label>
											<select name="angkatan">
												<option disabled="" selected="">Pilih Angkatan</option>
												<?php 
												for ($i=1990; $i<=date('Y') ; $i++) {  ?>
												<option value="<?php echo $i; ?>"
												<?php echo ($user->angkatan==$i?'selected':''); ?>
												><?php echo $i; ?></option>
												<?php }
												 ?>
											</select>
											
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Nama *</label>
											<input type="text" name="nama" placeholder="Nama Anda" value="<?php echo $user->nama; ?>">
										</div>
									</div>

									<div class="row">

										<div class="col-lg-6 col-md-6 col-sm-12">
											<label>Email *</label>
											<input type="text" name="email" placeholder="Email Anda" value="<?php echo $user->email; ?>">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<label>Username *</label>
											<input type="text" name="username" disabled="true"  placeholder="Username Anda" value="<?php echo $user->username; ?>">
										</div>
										
									</div>
									<input type="submit" class="button donate" value="Perbarui">
								</form>
							</div>
						</div>
					</div>		
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>