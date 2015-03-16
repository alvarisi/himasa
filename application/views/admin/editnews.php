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
							<a href="<?php echo base_url() ?>office/editnews/<?php echo $berita->idberita; ?>" title="">Edit Berita</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Edit Berita</h3>
						<span>Deskripsi</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Form Edit Berita</h4>
							</div>
							<div class="widget-content">
								<?php if($this->session->flashdata('suksesberita')){ ?>
								<div class="alert alert-info fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('suksesberita'); ?>
								</div>
								<?php } ?>
								<?php if($this->session->flashdata('gagalberita')){ ?>
								<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('gagalberita'); ?>
								</div>
								<?php } ?>
								<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/submiteditnews" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-md-2 control-label">Judul :</label>
										<div class="col-md-10"><input type="text" name="judul" class="form-control" value="<?php echo stripslashes($berita->judulberita); ?>"></div>
										<input type="hidden" name="idberita" class="form-control" value="<?php echo $berita->idberita; ?>">
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Isi Berita :</label>
										<div class="col-md-10"><textarea rows="5" name="isi" class="form-control wysiwyg"><?php echo stripslashes($berita->isiberita); ?></textarea></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Kategori :</label>
										<div class="col-md-10">
											<div class="row">
												<div class="col-md-4">
													<select class="form-control" name="kategori">

														<?php foreach ($kategori->result() as $row) { 
															if($row->idkategori!=$berita->kategoriberita){
															?>
															<option value="<?php echo $row->idkategori; ?>"><?php echo $row->namakategori; ?></option>
														<?php }else{ ?>
															<option selected value="<?php echo $row->idkategori; ?>"><?php echo $row->namakategori; ?></option>
														<?php } } ?>
													</select>
												</div>
											</div> <!--.row -->
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Gambar :</label>
										<div class="col-md-10">
											<input type="file" name="gambar" data-style="fileinput">
											<span class="help-block">* Boleh dikosongkan bila tidak ingin dirubah.</span>
										</div>
										<?php if($berita->gambarberita!=''){ ?>
										<div class="col-md-6 col-md-push-3">
											<img src="<?php echo base_url(); ?>content/berita/<?php echo $berita->gambarberita; ?>" class="img-responsive img-thumbnail">
										</div>
										<?php } ?>
									</div>
									<div class="form-actions">
										<label class="col-md-2 control-label"></label>
										<button type="submit" class="submit btn btn-primary">
											Perbarui&nbsp;&nbsp;<i class="icon-angle-right"></i>
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

