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
							<div class="panel-heading">Forum</div>
						  <div class="panel-body">
						  	<h4><?php echo $forum->judulthread; ?></h4>
						  	<?php 
						  	if($forum->gambarthread!='')
						  	{ ?>
						  	<img src="<?php echo base_url() ?>content/thread/<?php echo $forum->gambarthread; ?>" class=""  width="450px;">
						  	<?php }

						  	?>
						  	<p>
						  		<?php echo $forum->isithread; ?>
						  	</p>
						  </div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">Komentar Forum</div>
						  <div class="panel-body">
						  	<ul class="thread-list">
						    	<?php
						    	foreach ($dforum as $row) { ?>
						    		<li>
						    		<p><?php echo $row->isikomen; ?></p>
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
						<div class="panel panel-default">
							<div class="panel-heading">Kirimkan Komentar</div>
						  <div class="panel-body">

						  	<?php if($this->session->flashdata('gagalthread') || $this->session->flashdata('suksesthread')){ ?>
								<div class="animate-onscroll alert-box <?php if($this->session->flashdata('suksesthread')){ ?> success <?php } ?> <?php if($this->session->flashdata('gagalthread')){ ?> error <?php } ?>">
									<p>
										<?php if($this->session->flashdata('suksesthread')){ ?> <?php echo $this->session->flashdata('suksesthread'); ?> <?php } ?>
										<?php if($this->session->flashdata('gagalthread')){ ?> <?php echo $this->session->flashdata('gagalthread'); ?> <?php } ?>
									</p>
								</div>
								<?php } ?>
							    <form class="animate-onscroll" method="post" action="<?php echo base_url(); ?>index.php/forum/comment/<?php echo $forum->idthread ?>" enctype="multipart/form-data"
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<label>Komentar *</label>
											<textarea name="description" class="wysiwyg"></textarea>
										</div>
									</div>
									<input type="submit" class="button donate" value="Kirim">
								</form>
							</div>
						</div>

					</div>		
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>