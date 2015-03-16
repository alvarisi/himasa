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
							<a href="<?php echo base_url() ?>office/listgallery" title="">Daftar Gallery</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Daftar Gallery</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Daftar Gallery</h4>
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
											<th>Judul</th>
											<th>Jenis</th>
											<th>Konten</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($gallery->result() as $row) { ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo substr($row->judul,0,125); ?></td>
											<td><?php echo substr($row->jenis,0,125); ?></td>
											<td>
												<?php if($row->jenis=="foto"){ $jenis = 'f';?>
													<img src="<?php echo base_url() ?>content/gallery/<?php echo urlencode($row->foto); ?>" class="img-responsive img-thumbnail" style="width:250px;">
												<?php }else{ $jenis = 'v'; ?>
													<a href="https:youtube<?php echo $row->link; ?>"><img src="<?php echo base_url() ?>content/gallery/<?php echo $row->foto; ?>" class="img-responsive img-thumbnail" ></a>
												<?php } ?>
											<td><!-- <a href="<?php echo base_url(); ?>index.php/office/editgallery/<?php echo $row->idgallery; ?>" class="icon-edit"></a>&nbsp;&nbsp; --> <a href="<?php echo base_url(); ?>index.php/office/deletegallery/<?php echo $row->idgallery; ?>-potong-<?php echo $row->foto; ?>" class="icon-remove"></a></td>
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
