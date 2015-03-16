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
											<th>Judul Thread</th>
											<th>Isi Thread</th>
											<th>Gambar</th>
											<th>Waktu</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($threads->result() as $row) { ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo substr(stripslashes($row->judulthread),0,125); ?></td>
											<td><?php echo substr(stripslashes($row->isithread),0,125); ?>
											<div class="col-md-12">
												<a data-toggle="modal" href="#berita<?php echo $no; ?>" class="btn btn-inverse btn-block">Hapus</a>
											</div>
											</td>
											<td class="col-md-2">
												<?php if($row->gambarthread!="")
												{ ?>
												<img src="<?php echo base_url(); ?>content/thread/<?php echo $row->gambarthread; ?>" class="img-responsive img-thumbnail">
												<?php }else{ ?>
													-
												<?php } ?>
											<td><?php echo $row->waktuthread; ?></td>
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
