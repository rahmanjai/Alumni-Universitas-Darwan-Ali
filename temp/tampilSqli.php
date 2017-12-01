<!DOCTYPE html>
<html>
<head>
<title>Menampilkan Data</title>
<link rel="stylesheet" type="text/css" href="styleSqli.css?v=1" />
<?php

	include("koneksiSqli.php");
	
	// Query menampilkas tabel
	$sql="SELECT * FROM tb_mahasiswa";
	$hasil=$conn->query($sql);
	
	
	
?>
</head>
<body>
<h3>MENAMPILKAN DATA MAHASISWA</h3>
<table width="620px" align="center" border="1" style="border-collapse:collapse">
	<tr>
		<th>NPM</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>NO HP</th>
	</tr>
	<?php
	if ($hasil->num_rows > 0){
		// hasil keluaran
		while ($row = $hasil-> fetch_assoc()){
			// perulangan hasil data
			$npm=$row['npm'];
			$nama=$row['nama'];
			$alamat=$row['alamat'];
			$no_hp=$row['no_hp'];
	?>
	<tr>
		<td><?php echo $npm?></td>
		<td><?php echo $nama?></td>
		<td><?php echo $alamat?></td>
		<td><?php echo $no_hp?></td>
	</tr>
	
	<?php		
		}
	}else{
	?>
		<tr>
		<td colspan="4">Data Tidak Ditemukan</td>
		</tr>
	<?php
	}
	?>
</table>
</body>
</html>