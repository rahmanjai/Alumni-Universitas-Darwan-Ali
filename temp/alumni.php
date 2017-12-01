<?php
//memanggil config.php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
 <title>Alumni universitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=1" />
  <link rel="stylesheet" type="text/css" href="styleSqli.css?v=1"/>

</head>
<body>
<div id="wrapper">
<!-- Navigasi Panel -->
<?php

include "menuBar.php";

?>

	<div ="header">
		<h2 align = "center">Alumni Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  <h3 align = "center">Data Alumni</h3>
  
<table width="620px" align="center" border="1" style="border-collapse:collapse">
	<tr>
		<th>NPM</th>
		<th>NAMA</th>
		<th>Tempat</th>
		<th>Tanggal Lahir</th>
		<th>Pilihan</th>
	</tr>
	<?php
	include ("koneksiSqli.php");
	
	$query="SELECT 	m.npm, 
					m.nama, 
					m.tempat_lahir, 
					m.tanggal_lahir 
			FROM 	tb_mahasiswa m";
	$hasil=mysqli_query($conn,$query);
	
	if($hasil){
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
			<td>
				<?php echo $row['npm']; ?>
			</td>
			<td>
				<a href="alumniDetail.php?npm=<?php echo $row['npm']; ?>">
					<?php echo $row['nama']; ?></a>
			</td>
			<td>
				<?php echo $row['tempat_lahir']; ?>
			</td>
			<td>
				<?php echo $row['tanggal_lahir']; ?>
			</td>
			<td>
				<a href="alumniEdit.php?npm=<?php echo $row['npm']?>">
				Rubah | 
				</a>
				<a href="alumniHapus.php?npm=<?php echo $row['npm']?>">
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