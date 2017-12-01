<!DOCTYPE html>
<html>
<head>
 <title>Prodi Universitas Darwan Ali</title>
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
		<h2 align = "center">Prodi Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
    <h3 align = "center">Data Prodi</h3>

    <div id="cari">
		<form action="prodi.php" method="POST">
			<input type="text" name="teksCari">
			<button name="cari" type="submit" value="cari">
				Cari
			</button>
		</form>
	</div>
  
  <div id="tombol">
  		<a class="aa" href="prodiTambah.php">Tambah Data</a>
	</div>
  
<table width="620px" align="center" border="1" style="border-collapse:collapse">
	<tr>
		<th>ID Prodi</th>
		<th>Nama Prodi</th>
		<th>Fakultas</th>
		<th>Pilihan</th>
	</tr>
	<?php
	include ("../koneksi/koneksiSqli.php");
	
	if(isset($_POST['cari'])){
		$textcari = $_POST['teksCari'];
		$sql = "SELECT * FROM tb_prodi WHERE nama_prodi like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT 	*
				FROM 	tb_prodi";
		$hasil=mysqli_query($conn,$query);
	}
	
	if($hasil){
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
			<td>
				<?php echo $row['id_prodi']; ?>
			</td>
			<td>
				<a href="prodiDetail.php?id_prodi=<?php echo $row['id_prodi']; ?>">
					<?php echo $row['nama_prodi']; ?></a>
			</td>
			<td>
				<?php echo $row['id_fakultas']; ?>
			</td>
			<td>
				<a href="prodiEdit.php?id_prodi=<?php echo $row['id_prodi']?>">
				Rubah | 
				</a>
				<a href="prodiHapus.php?id_prodi=<?php echo $row['id_prodi']?>">
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