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
							<a href="<?php echo base_url() ?>office/listpesan" title="">Pesan Masuk</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Pesan Masuk</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Daftar Pesan Masuk</h4>
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
											<th>Email</th>
											<th>Website</th>
											<th>Pesan</th>
											<th>Waktu</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($pesan->result() as $row) { ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo stripslashes($row->nama); ?></td>
											<td><?php echo $row->email; ?></td>
											<td><?php echo $row->website; ?></td>
											<td><?php echo substr(stripslashes($row->pesan),0,125); ?>
											<div class="col-md-12">
												<a data-toggle="modal" href="#berita<?php echo $no; ?>" class="btn btn-inverse btn-block">Selengkapnya</a>
											</div>
											</td>
											<!-- Modal dialog -->
											<div class="modal fade" id="berita<?php echo $no++; ?>">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title"><?php echo stripslashes($row->nama); ?></h4>
														</div>
														<div class="modal-body">
															<?php echo stripslashes($row->pesan); ?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											<td><?php $date= new DateTime($row->waktu); echo $date->format('d/m/Y'); ?></td>											
											<td><a href="<?php echo base_url(); ?>index.php/office/deletepesan/<?php echo $row->id; ?>" class="icon-remove"></a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container -->

		</div>
