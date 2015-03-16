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
							<a href="<?php echo base_url() ?>office/editdonatur/<?php echo $donatur->iddonatur; ?>" title="">Edit Data Donatur</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->
				<div class="page-header">
					<div class="page-title">
						<h3>Edit Data Donatur</h3>
						<span>Deskripsi</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Form Edit Donatur</h4>
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
								<form class="form-horizontal row-border" action="<?php echo base_url(); ?>index.php/office/submiteditdonatur" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-md-2 control-label">Nama Donatur :</label>
										<div class="col-md-10"><input type="text" name="nama" class="form-control" value="<?php echo $donatur->namadonatur; ?>"><input type="hidden" name="iddonatur" class="form-control" value="<?php echo $donatur->iddonatur; ?>"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Kontak Donatur :</label>
										
											<div class="col-md-5">
												<input type="text" name="email" class="form-control" value="<?php echo $donatur->emaildonatur; ?>"><span class="help-block">Email Donatur</span>
											</div>
											<div class="col-md-5">
												<input type="text" name="telp" class="form-control" value="<?php echo $donatur->telpdonatur; ?>"><span class="help-block">Telp Donatur</span>
											</div>
										
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Bank Donatur :</label>
										<div class="col-md-10"><input type="text" name="bank" value="<?php echo $donatur->bankdonatur; ?>" class="form-control"></div>
									</div>

									<div class="form-group">
										<label class="col-md-2 control-label">Jumlah Donasi :</label>
										<div class="col-md-10"><input type="text" name="jumlah" class="form-control" value="<?php echo $donatur->jumlah; ?>"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Tanggal Pengiriman :</label>
										<div class="col-md-10">
											<input type="text" name="tgl" class="form-control datepicker" value="<?php $date= new DateTime($donatur->tglpengiriman); echo $date->format('d-m-Y'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Subject :</label>
										<div class="col-md-10"><input type="text" name="subject" class="form-control" value="<?php echo $donatur->subjek; ?>"></div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Pesan :</label>
										<div class="col-md-10"><textarea rows="3" cols="5" name="pesan" value="<?php echo $donatur->pesan; ?>" class="form-control"></textarea></div>
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

