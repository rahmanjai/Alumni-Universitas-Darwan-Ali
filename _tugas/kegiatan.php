<!DOCTYPE html>
<html>
<head>
 <title>Data Kegiatan</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
  <link rel="stylesheet" type="text/css" href="../style/styleTabel.css?v=1"/>

</head>
<body>
<div id="wrapper">
<!-- Navigasi Panel -->
<?php

?>

	<div ="header">
		<h2 align = "center">DATA KEGIATAN</h2>
	</div>
  
  <div id="content">
  <div id="article">

  	<div id="tam2">
  		
  	</div>
 	<div id="tam">
  		<a href="kegiatanTambah.php">Tambah 1</a>
  	</div>
  	<div id="tam">
  		<a href="kegiatanTambah2.php">Tambah 2</a>
  	</div>
  
<table width="620px" align="center" border="1" style="border-collapse:collapse">
	<tr>
		<th>No</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>Jenis Kegiatan</th>
		<th>Detil Kegiatan</th>
	</tr>
	<?php
	include ("../koneksi/koneksiMagang.php");
	
	if(isset($_POST['cari'])){
		$textcari = $_POST['teksCari'];
		$sql = "SELECT * FROM tkegiatan WHERE jenis like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT 	*
				FROM 	tkegiatan";
		$hasil=mysqli_query($conn,$query);
	}
	
	if($hasil){
		$no = 1;
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
			<td>
				<?php  echo $no ?>
			</td>
			<td>
				<?php echo $row['id_kegiatan']; ?>
			</td>
			<td>
				<?php echo $row['NIS']; ?>
			</td>
			<td>
				<?php echo $row['Jenis_Kegiatan']; ?>
			</td>
			<td>
				<?php echo $row['Detil_Kegiatan']; ?>
			</td>
		</tr>
	<?php
		$no++;
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