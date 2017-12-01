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
		<h2 align = "center">Yudisium Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  
      <h3 align = "center">Data Yudisium</h3>
  
  <div id="tombol">
  		<a class="aa" href="yudisiumTambah.php">Tambah Data</a>
	</div>
  
<table width="620px" align="center" border="1" style="border-collapse:collapse">
	<tr>
		<th>ID Yudisium</th>
		<th>NPM</th>
		<th>NAMA</th>
		<th>Tanggal Keluar</th>
		<th>SK Yudisium</th>
		<th>Rubah</th>
	</tr>
	<?php
	include ("../koneksi/koneksiSqli.php");
	
	$query="SELECT 	*
			FROM 	tb_yudisium y, tb_mahasiswa m
			WHERE 	y.npm=m.npm";
	$hasil=mysqli_query($conn,$query);
	
	if($hasil){
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
			<td>
				<?php echo $row['id_yudisium']; ?>
			</td>
			<td>
				<a href="yudisiumDetail.php?id_yudisium=<?php echo $row['id_yudisium']; ?>">
					<?php echo $row['npm']; ?></a>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['tanggal_keluar']; ?>
			</td>
			<td>
				<?php echo $row['sk_yudisium']; ?>
			</td>
			<td>
				<a href="yudisiumEdit.php?id_yudisium=<?php echo $row['id_yudisium']?>">
				Rubah | 
				</a>
				<a href="yudisiumHapus.php?id_yudisium=<?php echo $row['id_yudisium']?>">
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