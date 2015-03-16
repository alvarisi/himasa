		<?php
		function toMoney($val,$symbol='Rp ',$r=2)
		{


		    $n = $val; 
		    $c = is_float($n) ? 1 : number_format($n,$r);
		    $d = '.';
		    $t = ',';
		    $sign = ($n < 0) ? '-' : '';
		    $i = $n=number_format(abs($n),$r); 
		    $j = (($j = count($i)) > 3) ? $j % 3 : 0; 

		   return  $symbol.$sign .($j ? substr($i,0, $j) + $t : '').preg_replace('/(\d{3})(?=\d)/',"$1" + $t,substr($i,$j)) ;

		}
		function bulan($bulan)
		{
		Switch ($bulan){
		    case 1 : $bulan="Januari";
		        Break;
		    case 2 : $bulan="Februari";
		        Break;
		    case 3 : $bulan="Maret";
		        Break;
		    case 4 : $bulan="April";
		        Break;
		    case 5 : $bulan="Mei";
		        Break;
		    case 6 : $bulan="Juni";
		        Break;
		    case 7 : $bulan="Juli";
		        Break;
		    case 8 : $bulan="Agustus";
		        Break;
		    case 9 : $bulan="September";
		        Break;
		    case 10 : $bulan="Oktober";
		        Break;
		    case 11 : $bulan="November";
		        Break;
		    case 12 : $bulan="Desember";
		        Break;
		    }
		return $bulan;
		}
		 ?>
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
							<a href="<?php echo base_url() ?>office/listdonatur" title="">Daftar Donatur</a>
						</li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>Daftar Donatur</h3>
						<span>Daftar Donatur</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Daftar Donatur</h4>
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
											<th>Nama donatur</th>
											<th>Email donatur</th>
											<th>Telp Donatur</th>
											<th>Bank</th>
											<th>Jumlah</th>
											<th>Tanggal Donatur</th>
											<th>Subject</th>
											<th>Pesan</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($donatur->result() as $row) { ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $row->namadonatur; ?></td>
											<td><?php echo $row->emaildonatur; ?></td>
											<td><?php echo $row->telpdonatur; ?></td>
											<td><?php echo $row->bankdonatur; ?></td>
											<td><?php if($row->jumlah!=""){ echo toMoney((int)$row->jumlah);}else{ echo "Rp. 0";}; ?></td>
											<td><?php $date= new DateTime($row->tglpengiriman); 
												echo $date->format('d')." ";
												echo bulan($date->format('n'))." ";
												echo $date->format('Y');
											 ?></td>
											<td><?php echo substr($row->subjek,0,125); ?></td>
											<td><?php echo substr($row->pesan,0,125); ?>
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
															<h4 class="modal-title"><?php echo $row->subjek; ?></h4>
														</div>
														<div class="modal-body">
															<?php echo $row->pesan; ?>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											<td><a href="<?php echo base_url(); ?>index.php/office/editdonatur/<?php echo $row->iddonatur; ?>" class="icon-edit"></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/office/deletedonatur/<?php echo $row->iddonatur; ?>" class="icon-remove"></a></td>
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
