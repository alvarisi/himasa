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
							<a href="<?php echo base_url() ?>office/addchild" title="">Tambah Data Anak</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Tambah Data Anak</h3>
						<span>Deskripsi</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Form Tambah Anak</h4>
							</div>
							<div class="widget-content">
								<?php if($this->session->flashdata('suksesanak')){ ?>
								<div class="alert alert-info fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('suksesanak'); ?>
								</div>
								<?php } ?>
								<?php if($this->session->flashdata('gagalanak')){ ?>
								<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('gagalanak'); ?>
								</div>
								<?php } ?>
								<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/addchild" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-md-2 control-label">No Induk :</label>
										<div class="col-md-10"><input type="text" name="noinduk" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Nama :</label>
										<div class="col-md-10"><input type="text" name="nama" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">TTL :</label>
										<div class="col-md-10"><input type="text" name="ttl" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Orang Tua :</label>
										
											<div class="col-md-5">
												<input type="text" name="ayah" class="form-control"><span class="help-block">Nama Ayah</span>
											</div>
											<div class="col-md-5">
												<input type="text" name="ibu" class="form-control"><span class="help-block">Nama Ibu</span>
											</div>
										
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Alamat:</label>
										<div class="col-md-10"><textarea rows="3" cols="5" name="alamat" class="form-control"></textarea></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Keterangan :</label>
										<div class="col-md-10"><textarea rows="3" cols="5" name="keterangan" class="form-control"></textarea></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Foto :</label>
										<div class="col-md-10">
											<input type="file" name="foto" data-style="fileinput">
											<span class="help-block">* Boleh dikosongkan bila tidak ada gambar.</span>
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
	

