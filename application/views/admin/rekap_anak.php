<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Daftar Anak Arrohim Sambisari</h3>
	<table>
	<thead>
		<tr>
			<th>No Induk</th>
			<th>Nama</th>
			<th>TTL</th>
			<th>Orang Tua</th>
			<th>Alamat</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
		
	
	<?php $no=1;
	foreach ($anak->result() as $row) { ?>
		<tr>
			<td><?php echo $row->noinduk; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->ttl; ?></td>
			<td><?php echo $row->ayah; ?> : <?php echo $row->ibu; ?></td>
			<td><?php echo $row->alamat; ?></td>
			<td><?php echo $row->keterangan; ?></td>
		</tr>
	<?php }
	?>
	</tbody>
	</table>
</body>
</html>