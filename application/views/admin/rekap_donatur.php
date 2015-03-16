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
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	table{
		border: 1px solid;
		margin-right: auto;
		margin-left: auto;
	}
	td, th {
    border: 1px solid #000;
	}
	thead{
		font-weight: bold;
	}

	tbody tr{
		background: #F5F5F5;
		border: 1px solid;
	}
	tbody tr:nth-child(even){
		background: #fff;
	}
	h3{
		text-align: center;
	}
	</style>
</head>
<body>
	<h3>Rekap Donatur Arrohim Sambisari</h3>
	<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Donatur</th>
			<th>Email Donatur</th>
			<th>Telp Donatur</th>
			<th>Bank Donatur</th>
			<th>Tanggal Pengiriman</th>
			<th>Jumlah</th>
			<th>Subjek</th>
			<th>Pesan</th>
		</tr>
	</thead>
	<tbody>
		
	
	<?php $no=1;
	foreach ($donatur->result() as $row) { ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->namadonatur; ?></td>
			<td><?php echo $row->emaildonatur; ?></td>
			<td><?php echo $row->telpdonatur; ?></td>
			<td><?php echo $row->bankdonatur; ?></td>
			<td><?php $date= DateTime::createFromFormat("Y-m-d", $row->tglpengiriman);
												echo $date->format('d')." ";
												echo bulan($date->format('n'))." ";
												echo $date->format('Y');?></td>
			<td><?php echo $row->jumlah; ?></td>
			<td><?php echo $row->subjek; ?></td>
			<td><?php echo $row->pesan; ?></td>
		</tr>
	<?php }
	?>
	</tbody>
	</table>
</body>
</html>

