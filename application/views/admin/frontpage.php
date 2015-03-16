		<div id="content">
			<div class="container">
				<!-- Breadcrumbs line -->
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="<?php echo base_url() ?>office">Dashboard</a>
						</li>
						<li class="current">
							<a href="<?php echo base_url() ?>office/frontpage" title="">Tampilan Depan</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Tampilan Depan</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Form Tampilan Depan</h4>
							</div>
							<div class="widget-content">
								<?php if($this->session->flashdata('sukses')){ ?>
								<div class="alert alert-info fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('sukses'); ?>
								</div>
								<?php } ?>
								<?php if($this->session->flashdata('gagal')){ ?>
								<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('gagal'); ?>
								</div>
								<?php } ?>
								<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/submitfront" method="post" enctype="multipart/form-data">
									<!-- <div class="form-group">
										<label class="col-md-2 control-label">Select:</label>
										<div class="col-md-10">
											<div class="row">
												<div class="col-md-6">
													<select class="form-control" name="jenis" id="kategori">
														<option selected disabled>Pilih jenis</option>
														<option value="foto">Foto</option>
														<option value="video">Video</option>
													</select>
												</div>
											</div> 
									</div>
								</div> -->
								<div id="galery-input">
									<div class="form-group">
										<label class="col-md-2 control-label">Kalimat Depan :</label>
										<div class="col-md-10"><input type="text" name="kalimatdepan" class="form-control" value="<?php echo stripslashes($front->katadepan); ?>"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Rata Kalimat (Align) :</label>
										<div class="col-md-10">
											<select name="rata">
												<option value="right" <?php if($front->rata=='right') echo "selected"; ?>>Kanan</option>
												<option value="mid" <?php if($front->rata=='mid') echo "selected"; ?>>Tengah</option>
												<option value="left" <?php if($front->rata=='left') echo "selected"; ?>>Kiri</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Deskripsi Depan :</label>
										<div class="col-md-10">
											<textarea name="deskripsi" cols="5" rows="5" class="form-control"><?php echo stripslashes($front->deskripsi); ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Foto Wallpaper Depan :</label>
										<div class="col-md-10">
											<input type="file" name="foto" data-style="fileinput">
											<span class="help-block"></span>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-6 col-md-6 col-md-push-3 col-md-pull-3">
											<img src="<?php echo base_url(); ?>assets/img/slide1.jpg" class="img-responsive">
										</div>
									</div>
								</div>
									<div class="form-actions">
										<label class="col-md-2 control-label"></label>
										<button type="submit" class="submit btn btn-primary">
											Perbarui&nbsp;&nbsp;<i class="icon-angle-right"></i>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>

	

