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
		<h2 align = "center">Mahasiswa Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  
	<div id="cari">
		<form action="mahasiswa.php" method="POST">
			<input type="text" name="teksCari">
			<button name="cari" type="submit" value="cari">
				Cari
			</button>
		</form>
	</div>

	<div id="tombol">
  		<a class="aa" href="mahasiswaTambah.php">Tambah Data</a>
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
		$sql = "SELECT * FROM tb_mahasiswa WHERE nama like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT 	m.npm, 
					m.nama, 
					m.tempat_lahir, 
					m.tanggal_lahir 
			FROM 	tb_mahasiswa m";
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
				<a href="mahasiswaDetail.php?npm=<?php echo $row['npm']; ?>">
					<?php echo $row['nama']; ?></a>
			</td>
			<td>
				<?php echo $row['tempat_lahir']; ?>
			</td>
			<td>
				<?php echo $row['tanggal_lahir']; ?>
			</td>
			<td>
				<a href="mahasiswaEdit.php?npm=<?php echo $row['npm']?>">
				Rubah | 
				</a>
				<a href="mahasiswaHapus.php?npm=<?php echo $row['npm']?>">
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