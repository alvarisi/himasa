		<div id="content">
			<div class="container">
				<!-- Breadcrumbs line -->
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Dashboard</a>
						</li>
						<li class="current">
							<a href="pages_calendar.html" title="">Calendar</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Tambah Sponsor</h3>
						<span>Deskripsi</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Form Tambah sponsor</h4>
							</div>
							<div class="widget-content">
								<?php if($this->session->flashdata('suksessponsor')){ ?>
								<div class="alert alert-info fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('suksessponsor'); ?>
								</div>
								<?php } ?>
								<?php if($this->session->flashdata('gagalsponsor')){ ?>
								<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('gagalsponsor'); ?>
								</div>
								<?php } ?>
								<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/sponsor" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-md-2 control-label">Nama Sponsor :</label>
										<div class="col-md-10"><input type="text" name="nama" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Foto Sponsor :</label>
										<div class="col-md-10">
											<input type="file" name="foto" data-style="fileinput">
											<span class="help-block">* Boleh dikosongkan bila tidak ada gambar.</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Link Website:</label>
										<div class="col-md-10"><input type="text" name="link" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Keterangan Sponsor :</label>
										<div class="col-md-10"><textarea rows="3" cols="5" name="keterangan" class="form-control"></textarea></div>
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
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Daftar Sponsor</h4>
								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
									</div>
								</div>
							</div>
							<div class="widget-content no-padding">
								<table class="table table-striped table-bordered table-hover table-checkable datatable">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Foto</th>
											<th>Link</th>
											<th>Keterangan</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($sponsor->result() as $row) { ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $row->namasponsor; ?></td>
											<td>
												<?php if($row->fotosponsor!="")
												{ ?>

												
												<img src="<?php echo base_url() ?>content/sponsor/<?php echo $row->fotosponsor; ?>" class="img-responsive img-thumbnail" />
												<?php }else{ ?> 
												-
												<?php } ?>
											</td>
											<td><?php echo $row->linksponsor; ?></td>
											<td><?php echo $row->keterangan; ?></td>
											<td><a href="<?php echo base_url(); ?>index.php/office/deletesponsor/<?php echo $row->idsponsor; ?>" class="icon-remove"></a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
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

