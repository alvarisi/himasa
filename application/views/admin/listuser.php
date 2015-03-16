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
							<a href="<?php echo base_url() ?>office/listnews" title="">Daftar User</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Daftar User</h3>
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Daftar User</h4>
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
											<th>Id User</th>
											<th>Nama</th>
											<th>Angkatan</th>
											<th>Username</th>
											<th>Gambar</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($users->result() as $row) { ?>
										<tr>
											<td><?php echo substr(stripslashes($row->iduser),0,125); ?></td>
											<td><?php echo substr(stripslashes($row->nama),0,125); ?></td>
											<td><?php echo substr(stripslashes($row->angkatan),0,125); ?></td>
											<td><?php echo substr(stripslashes($row->username),0,125); ?></td>
											<td class="col-md-2">
												<?php if($row->gambar!="")
												{ ?>
												<img src="<?php echo base_url(); ?>content/berita/<?php echo $row->gambarberita; ?>" class="img-responsive img-thumbnail">
												<?php }else{ ?>
													-
												<?php } ?>
											<td>
												<?php 
													if(substr(stripslashes($row->enabled),0,125) == 1)
														echo "Aktif"; 
													else
														echo "Banned"; 
												?>
											</td>
											<td>
											<div class="col-md-12">
												<?php 
													$status = $row->enabled;
													$iduser = $row->iduser;
												?>
												<a data-toggle="modal" href="<?php echo base_url(); ?>index.php/office/changeuserstatus/<?php echo $status.'/'.$iduser?>" class="btn btn-inverse btn-block">Ban/Unban</a>
											</div>
											</td>
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