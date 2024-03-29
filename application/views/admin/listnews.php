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
							<a href="<?php echo base_url() ?>office/listnews" title="">Daftar Berita</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Daftar Berita</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Daftar Berita</h4>
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
											<th>Judul Berita</th>
											<th>Isi Berita</th>
											<th>Gambar</th>
											<th>Kategori</th>
											<th>Waktu</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($berita->result() as $row) { ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->judulberita; ?></td>
											<td><?php echo $row->isiberita; ?>
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
															<h4 class="modal-title"><?php echo $row->judulberita; ?></h4>
														</div>
														<div class="modal-body">
															<?php echo $row->isiberita; ?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											<td class="col-md-2">
												<?php if($row->gambarberita!="")
												{ ?>
												<img src="<?php echo base_url(); ?>content/berita/<?php echo urlencode($row->gambarberita); ?>" class="img-responsive img-thumbnail">
												<?php }else{ ?>
													-
												<?php } ?>
											<td><?php echo $row->namakategori; ?></td>
											<td><?php echo $row->waktuberita; ?></td>
											<td><a href="<?php echo base_url(); ?>index.php/office/editnews/<?php echo $row->idberita; ?>" class="icon-edit"></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/office/deletenews/<?php echo $row->idberita; ?>" class="icon-remove"></a></td>
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
