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
		<h2 align = "center">Tugas Akhir</h2>
	</div>
  
  <div id="content">
  <div id="article">
  
      <div id="cari">
		<form action="tugasakhir.php" method="POST">
			<input type="text" name="teksCari">
			<button name="cari" type="submit" value="cari">
				Cari
			</button>
		</form>
	</div>
  
  <div id="tombol">
  		<a class="aa" href="tugasakhirTambah.php">Tambah Data</a>
	</div>
  
<table width="620px" align="center" border="1" style="border-collapse:collapse">
	<tr>
		<th>ID Tugas Akhir</th>
		<th>NPM</th>
		<th>NAMA</th>
		<th>IPK</th>
		<th>Judul Skripsi</th>
		<th>Rubah</th>
	</tr>
	<?php
	include ("../koneksi/koneksiSqli.php");
	
	if(isset($_POST['cari'])){
		$textcari = $_POST['teksCari'];
		$sql = "SELECT 	*
				FROM 	tb_tugas_akhir ta
				LEFT JOIN tb_mahasiswa m 
				ON 	ta.npm=m.npm 
				WHERE nama like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT 	*
				FROM 	tb_tugas_akhir ta
				LEFT JOIN tb_mahasiswa m 
				ON 	ta.npm=m.npm";
		$hasil=mysqli_query($conn,$query);
	}
	
	if($hasil){
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
			<td>
				<?php echo $row['id_tugas_akhir']; ?>
			</td>
			<td>
				<a href="tugasakhirDetail.php?id_tugas_akhir=<?php echo $row['id_tugas_akhir']; ?>">
					<?php echo $row['npm']; ?></a>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['IPK']; ?>
			</td>
			<td>
				<?php echo $row['judul_skripsi']; ?>
			</td>
			<td>
				<a href="tugasakhirEdit.php?id_tugas_akhir=<?php echo $row['id_tugas_akhir']?>">
				Rubah | 
				</a>
				<a href="tugasakhirHapus.php?id_tugas_akhir=<?php echo $row['id_tugas_akhir']?>">
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