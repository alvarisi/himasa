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
							<a href="<?php echo base_url() ?>office/listchild" title="">Daftar Data Anak</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Daftar Data Anak</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Daftar Data Anak</h4>
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
											<th>No Induk</th>
											<th>Nama</th>
											<th>TTL</th>
											<th>Ortu</th>
											<th>Alamat</th>
											<th>Keterangan</th>
											<th>Foto</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($anak->result() as $row) { ?>
										<tr>
											<td><?php echo $row->noinduk; ?></td>
											<td><?php echo stripslashes($row->nama); ?></td>
											<td><?php echo stripslashes($row->ttl); ?></td>
											<td><?php echo stripslashes($row->ayah); ?> : <?php echo stripslashes($row->ibu); ?></td>
											<td><?php echo stripslashes($row->alamat); ?></td>
											<td><?php echo stripslashes($row->keterangan); ?></td>
											<td>
											<?php if($row->foto!="")
												{ ?>
												<img src="<?php echo base_url(); ?>content/anak/<?php echo $row->foto; ?>" class="img-responsive img-thumbnail">
												<?php }else{ ?>
													-
												<?php } ?></td>
											<td><a href="<?php echo base_url(); ?>index.php/office/editchild/<?php echo $row->noinduk; ?>" class="icon-edit"></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/office/deletechild/<?php echo $row->noinduk; ?>" class="icon-remove"></a></td>
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
