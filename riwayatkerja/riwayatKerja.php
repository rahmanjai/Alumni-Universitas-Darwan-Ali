<!DOCTYPE html>
<html>
<head>
 <title>Alumni universitas Darwan Ali</title>
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
		<h2 align = "center">REWAYAT KERJA ALUMNI</h2>
	</div>
  
  <div id="content">
  <div id="article">

	<div id="cari">
		<form action="riwayatkerja.php" method="POST">
			<input type="text" name="teksCari">
			<button name="cari" type="submit" value="cari">
				Cari
			</button>
		</form>
	</div>

	<div id="tombol">
  		<a class="aa" href="riwayatKerjaTambah.php">Tambah Data</a>
	</div>

<table width="800px" align="center" border="1" style="border-collapse:collapse">
	<tr>
		<th>NPM</th>
		<th>NAMA</th>
		<th>Tempat Kerja</th>
		<th>Jenis Pekerjaan</th>
		<th>Pilihan</th>
	</tr>
	<?php
	include ("../koneksi/koneksiSqli.php");
	
	if(isset($_POST['cari'])){
		$textcari = $_POST['teksCari'];
		$sql = "SELECT * 
				FROM tb_riwayat_kerja 
				LEFT JOIN tb_mahasiswa
				ON tb_riwayat_kerja.npm=tb_mahasiswa.npm
				WHERE nama like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT *
				FROM 	tb_riwayat_kerja
				LEFT JOIN tb_mahasiswa
				ON tb_riwayat_kerja.npm=tb_mahasiswa.npm";
	$hasil=mysqli_query($conn,$query);
	}

	if($hasil){
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
			<td>
				<?php echo $row['npm']; ?>
			</td>
			<td>
				<a href="riwayatKerjaDetail.php?npm=<?php echo $row['npm']; ?>">
					<?php echo $row['nama']; ?></a>
			</td>
			<td>
				<?php echo $row['tempat_kerja']; ?>
			</td>
			<td>
				<?php echo $row['jenis_pekerjaan']; ?>
			</td>
			<td>
				<a href="riwayatKerjaEdit.php?nomor_riwayat=<?php echo $row['nomor_riwayat']?>">
				Rubah | 
				</a>
				<a href="riwayatKerjaHapus.php?nomor_riwayat=<?php echo $row['nomor_riwayat']?>">
				Hapus
				</a>
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