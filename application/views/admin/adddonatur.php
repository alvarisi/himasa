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
							<a href="<?php echo base_url() ?>office/adddonatur" title="">Tambah Data Donatur</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Tambah Data Donatur</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Form Tambah Donatur</h4>
							</div>
							<div class="widget-content">
								<?php if($this->session->flashdata('suksesdonatur')){ ?>
								<div class="alert alert-info fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('suksesdonatur'); ?>
								</div>
								<?php } ?>
								<?php if($this->session->flashdata('gagaldonatur')){ ?>
								<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<?php echo $this->session->flashdata('gagaldonatur'); ?>
								</div>
								<?php } ?>
								<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/adddonatur" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-md-2 control-label">Nama Donatur :</label>
										<div class="col-md-10"><input type="text" name="nama" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Kontak Donatur :</label>
										
											<div class="col-md-5">
												<input type="text" name="email" class="form-control"><span class="help-block">Email Donatur</span>
											</div>
											<div class="col-md-5">
												<input type="text" name="telp" class="form-control"><span class="help-block">Telp Donatur</span>
											</div>
										
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Bank Donatur :</label>
										<div class="col-md-10"><input type="text" name="bank" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Jumlah Donasi :</label>
										<div class="col-md-10"><input type="text" name="jumlah" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Tanggal Pengiriman :</label>
										<div class="col-md-10">
											<input type="text" id="tanggal" name="tgl" class="form-control datepicker">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Subject :</label>
										<div class="col-md-10"><input type="text" name="subject" class="form-control"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Pesan :</label>
										<div class="col-md-10"><textarea rows="3" cols="5" name="pesan" class="form-control"></textarea></div>
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

