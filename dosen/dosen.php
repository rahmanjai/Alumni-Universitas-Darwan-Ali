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
		<h2 align = "center">Dosen Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  
      <h3 align = "center">Data Dosen</h3>

      <div id="cari">
		<form action="dosen.php" method="POST">
			<input type="text" name="teksCari">
			<button name="cari" type="submit" value="cari">
				Cari
			</button>
		</form>
	</div>
  
  	<div id="tombol">
  		<a class="aa" href="dosenTambah.php">Tambah Data</a>
	</div>
  
<table width="620px" align="center" border="1" style="border-collapse:collapse">
	<tr>
		<th>NPM</th>
		<th>NAMA</th>
		<th>Tempat</th>
		<th>Tanggal Lahir</th>
		<th>Pilihan</th>
	</tr>
	<?php
	include ("../koneksi/koneksiSqli.php");
	
	if(isset($_POST['cari'])){
		$textcari = $_POST['teksCari'];
		$sql = "SELECT * FROM tb_dosen WHERE nama_dosen like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT 	*
				FROM 	tb_dosen";
		$hasil=mysqli_query($conn,$query);
	}
	
	if($hasil){
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
			<td>
				<?php echo $row['nid']; ?>
			</td>
			<td>
				<a href="dosenDetail.php?nid=<?php echo $row['nid']; ?>">
					<?php echo $row['nama_dosen']; ?></a>
			</td>
			<td>
				<?php echo $row['tempat_lahir']; ?>
			</td>
			<td>
				<?php echo $row['tanggal_lahir']; ?>
			</td>
			<td>
				<a href="dosenEdit.php?nid=<?php echo $row['nid']?>">
				Rubah | 
				</a>
				<a href="dosenHapus.php?nid=<?php echo $row['nid']?>">
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