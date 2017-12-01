<!DOCTYPE html>
<html>
<head>
 <title>Dosen Universitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
  <link rel="stylesheet" type="text/css" href="../style/styleTabel.css?v=1"/>

</head>
<body>
<div id="wrapper">
<!-- Navigasi Panel -->
<?php

include "../menu/menuBar.html";

?>

	<div ="header">
		<h2 align = "center">Data Kelulusan Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  
<table width="2000px" align="center" border="1" style="border-collapse:collapse">
	<tr>
	    <th>Pilihan</th>
		<th>NPM</th>
		<th>Nama</th>
		<th>Jenis Keluar</th>
		<th>Tanggal Keluar</th>
		<th>SK Yudisium</th>
		<th>Tanggal SK Yudisium</th>
		<th>IPK</th>
		<th>No Seri Ijasah</th>
		<th>Judul Tugas Akhir</th>
		<th>Bulan Awal Bimbingan</th>
		<th>Bulan Akhir Bimbingan</th>
		<th>Jalur Laporan Akhir Studi</th>
		<th>Pembimbing</th>

	</tr>
	<?php
	include ("../koneksi/koneksiSqli.php");
	
	$query="SELECT *
			FROM 	tb_mahasiswa m,
					tb_yudisium y,
            		tb_tugas_akhir ta,
            		tb_dosen d
			WHERE	y.npm=m.npm AND 
            		ta.npm=m.npm AND 
            		ta.pembimbing=d.nid";
	$hasil=mysqli_query($conn,$query);
	
	if($hasil){
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
			<td>
				<a href="datakelulusanDetail.php?npm=<?php echo $row['npm']; ?>">
				| PRINT |
				</a>
			</td>
			<td>
				<a href="datakelulusanDetail.php?npm=<?php echo $row['npm']; ?>">
					<?php echo $row['npm']; ?>
					</a>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['jenis_keluar']; ?>
			</td>
			<td>
				<?php echo $row['tanggal_keluar']; ?>
			</td>
			<td>
				<?php echo $row['sk_yudisium']; ?>
			</td>
			<td>
				<?php echo $row['tanggal_sk_yudisium']; ?>
			</td>
			<td>
				<?php echo $row['IPK']; ?>
			</td>
			<td>
				<?php echo $row['no_ijasah']; ?>
			</td>
			<td>
				<?php echo $row['judul_skripsi']; ?>
			</td>
			<td>
				<?php echo $row['bln_awl_bimbingan']; ?>
			</td>
			<td>
				<?php echo $row['bln_akhr_bimbingan']; ?>
			</td>
			<td>
				<?php echo $row['jalur_skripsi']; ?>
			</td>
			<td>
				<?php echo $row['nama_dosen']; ?>
			</td>

			
		</tr>
	<?php
		}
	}
	?>

</table>
 
 
 </div>
 </div>
 <div id="fotter">
  Copyright &copy Rahman Jailani
  <br>
  2017
  </div>
 </div>
</body>
</html>
