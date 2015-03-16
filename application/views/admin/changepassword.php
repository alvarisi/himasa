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
							<a href="<?php echo base_url() ?>office/changepassword" title="">Ganti Password</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Ganti Password</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Form Ganti Password</h4>
							</div>
							<div class="widget-content">
								<?php if($this->session->flashdata('suksescpassword')){ ?>
								<div class="alert alert-info fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('suksescpassword'); ?>
								</div>
								<?php } ?>
								<?php if($this->session->flashdata('gagalcpassword')){ ?>
								<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('gagalcpassword'); ?>
								</div>
								<?php } ?>
								<div class="row">
									<div class="col-md-8 col-lg-8 col-md-push-2 col-md-pull-2 col-lg-push-2 col-lg-pull-2">
										<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/changepassword" method="post">
											<div class="form-group">
												<label class="control-label">Password Lama:</label>
												<input type="password" name="passlama" class="form-control" placeholder="Isikan password lama anda...">
											</div>
											<div class="form-group">
												<label class="control-label">Password Baru:</label>
												<input type="password" name="passbaru" class="form-control" placeholder="Isikan password baru anda...">
											</div>
											<div class="form-group">
												<label class="control-label">Konfirmasi Password Baru:</label>
												<input type="password" name="cpassbaru" class="form-control" placeholder="Konfirmasi password baru anda...">
											</div>
											<div class="form-actions">
												<label class="col-md-5 control-label"></label>
												<button type="submit" class="submit btn btn-primary">
													Ganti Password&nbsp;&nbsp;<i class="icon-angle-right"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
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

