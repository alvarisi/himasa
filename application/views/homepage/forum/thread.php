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
						<a href="<?php echo base_url(); ?>index.php/forum/create" class="btn btn-info">Buat Forum Baru</a>
					</div>
				</div>
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Forum</div>
						  <div class="panel-body">
						    <ul class="thread-list">
						    	<?php
						    	foreach ($thread as $row) { ?>
						    		<li><a href="<?php echo base_url() ?>index.php/forum/detail/<?php echo $row->idthread; ?>"><?php echo $row->judulthread; ?></a>
						    		<br>
						    		oleh : <?php echo $row->username; ?>
						    		<br>
						    		<small>
						    		waktu : <?php $date = date('j F Y',strtotime($row->waktuthread)); echo $date; ?>
						    		</small>
						    		<hr>
						    		</li>

						    	<?php }
						    	 ?>
						    </ul>
						  </div>
						</div>
					</div>		
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>