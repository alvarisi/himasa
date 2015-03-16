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
							<a href="<?php echo base_url() ?>office/addgallery" title="">Tambah Galery</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Tambah Galery</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Form Tambah Galery</h4>
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
								<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/submitaddgallery" method="post" enctype="multipart/form-data">
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
									<div id="video">
									<div class="form-group">
										<label class="col-md-2 control-label">Judul * :</label>
										<div class="col-md-10"><input type="text" name="judulv" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Link * :</label>
										<div class="col-md-10"><input type="text" name="link" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Foto Cover * :</label>
										<div class="col-md-10">
											<input type="file" name="fotov" data-style="fileinput">
											<span class="help-block"></span>
										</div>
									</div>
									</div>
									<div  id="foto">
									<div class="form-group">
										<label class="col-md-2 control-label">Judul * :</label>
										<div class="col-md-10"><input type="hidden" name="jenis" class="form-control" value="foto"></div>
										<div class="col-md-10"><input type="text" name="judulf" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Foto * :</label>
										<div class="col-md-10">
											<input type="file" name="foto" data-style="fileinput">
											<span class="help-block"></span>
										</div>
									</div>
									</div>
								</div>
									<div class="form-actions">
										<label class="col-md-2 control-label"></label>
										<button type="submit" class="submit btn btn-primary">
											Tambahkan&nbsp;&nbsp;<i class="icon-angle-right"></i>
										</button>
										<button type="reset" class="submit btn btn-default">
											Reset&nbsp;&nbsp;<i class="icon-angle-right"></i>
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
	<script type="text/javascript">
	$('#foto').show();
	$('#video').hide();
	$('#kategori').change(function () {
		
		if($(this).val()=="foto")
		{
			$('#foto').show();	
			$('#video').hide();
		}
		else
		{
			$('#video').show();	
			$('#foto').hide();
		}
    });</script>

