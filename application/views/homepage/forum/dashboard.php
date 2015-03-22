		<section id="content">
			
			<section class="section page-heading animate-onscroll">
				
				<h1>Dashboard</h1>
				<p class="breadcrumb"><a href="<?php echo base_url() ?>">Home</a> / Dashboard</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="col-md-4">
							Angkatan
						</div>
						<div class="col-md-8">
							<?php echo $user->angkatan; ?>
						</div>
						<div class="col-md-4">
							Nama
						</div>
						<div class="col-md-8">
							<?php echo $user->nama; ?>
						</div>
						<div class="col-md-4">
							Email
						</div>
						<div class="col-md-8">
							<?php echo $user->email; ?>
						</div>
						<div class="col-md-4">
							Username
						</div>
						<div class="col-md-8">
							<?php echo $user->username; ?>
						</div>
						<div class="col-md-4">
							Password
						</div>
						<div class="col-md-8">
							<a href="<?php echo base_url(); ?>index.php/alumni/changePassword">ganti password</a>
						</div>
						<div class="col-md-12">
							<a href="<?php echo base_url(); ?>index.php/alumni/edit" class="button donate">Edit</a>
						</div>
					</div>		
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>