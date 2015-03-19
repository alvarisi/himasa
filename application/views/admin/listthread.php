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
							<a href="<?php echo base_url() ?>office/listnews" title="">Daftar Thread</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Daftar Thread</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Daftar Thread</h4>
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
											<th>Id User</th>
											<th>Judul Thread</th>
											<th>Isi Thread</th>
											<th>Gambar</th>
											<th>Waktu</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($threads->result() as $row) { ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo substr(stripslashes($row->iduser),0,125); ?></td>
											<td><?php echo substr(stripslashes($row->judulthread),0,125); ?></td>
											<td><?php echo substr(stripslashes($row->isithread),0,125); ?>
											</td>
											<td class="col-md-2">
												<?php if($row->gambarthread!="")
												{ ?>
													<img src="<?php echo base_url() ?>content/thread/<?php echo $row->gambarthread; ?>" class="img-responsive img-thumbnail" style="width:250px;">
												<?php }else{ ?>
													-
												<?php } ?>
											</td>
											<td><?php echo $row->waktuthread; ?></td>
											<td>
												<div class="col-md-12">
													<a data-toggle="modal" href="#thread<?php echo $no; ?>" class="btn btn-inverse btn-block">Selengkapnya</a>
												</div>
												<div class="modal fade" id="thread<?php echo $no++; ?>">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title"><?php echo stripslashes($row->judulthread); ?></h4>
														</div>
														<div class="modal-body">
															<?php echo stripslashes($row->isithread); ?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											</td>
											<!-- Modal dialog -->
											
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
