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
							<a href="<?php echo base_url() ?>office/frontpage" title="">Profil</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Profil</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Edit Profil</h4>
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
								<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/editprofile" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-md-2 control-label">Logo :</label>
										<div class="col-md-10">
											<input type="file" name="logo" data-style="fileinput">
											<span class="help-block"></span>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-6 col-md-6 col-md-push-3 col-md-pull-3">
											<img src="<?php echo base_url(); ?>content/profil/<?php echo $front->logo?>" class="img-responsive">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Sambutan Ketua :</label>
										<div class="col-md-10">
											<textarea name="sambutan" cols="5" rows="5" class="form-control wysiwyg"><?php echo stripslashes($front->sambutan); ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Visi :</label>
										<div class="col-md-10">
											<textarea name="visi" cols="5" rows="5" class="form-control wysiwyg"><?php echo stripslashes($front->visi); ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Misi :</label>
										<div class="col-md-10">
											<textarea name="misi" cols="5" rows="5" class="form-control wysiwyg"><?php echo stripslashes($front->misi); ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Sejarah :</label>
										<div class="col-md-10">
											<textarea name="sejarah" cols="5" rows="5" class="form-control wysiwyg"><?php echo stripslashes($front->sejarah); ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Organigram :</label>
										<div class="col-md-10">
											<input type="file" name="organigram" data-style="fileinput">
											<span class="help-block"></span>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-6 col-md-6 col-md-push-3 col-md-pull-3">
											<img src="<?php echo base_url(); ?>content/profil/<?php echo $front->organigram?>" class="img-responsive">
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

	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/typeahead/typeahead.min.js"></script> <!-- AutoComplete -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/autosize/jquery.autosize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/inputlimiter/jquery.inputlimiter.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/tagsinput/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/fileinput/fileinput.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/duallistbox/jquery.duallistbox.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/bootstrap-inputmask/jquery.inputmask.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/bootstrap-wysihtml5/wysihtml5.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.min.js"></script>


	

