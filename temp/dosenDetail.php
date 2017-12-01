<?php
//memanggil config.php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
 <title>Alumni universitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=1" />
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
  <h3 align = "center">Detail Data Alumni</h3>
  
<table  align="center" width="500">
  <tbody>
  
  <?php
	if (isset($_GET['nid'])){
		include ("koneksiSqli.php");
		
		$nid=$_GET['nid'];
	
		$query="SELECT *
				FROM 	tb_dosen
				WHERE	nid='$nid'";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>
	<tr>
	  <td></td>
	  <td align="right">
	  <a href="dosenEdit.php?nid=<?php echo $row['nid']?>">Rubah Data</a>
	  </td>
	</tr>
    <tr>
      <td align="right" width="50%">NID :</td>
      <td><?php echo $row['nid']; ?></td>
    </tr>
    <tr>
      <td align="right">Nama Dosen :</td>
      <td><?php echo $row['nama_dosen']; ?></td>
    </tr>
	<tr>
      <td align="right">Alamat :</td>
      <td><?php echo $row['tempat_lahir']; ?></td>
    </tr>
	<tr>
      <td align="right">Bidang :</td>
      <td><?php echo $row['bidang']; ?></td>
    </tr>
    <tr>
      <td align="right">Tempat Lahir :</td>
      <td><?php echo $row['tempat_lahir']; ?></td>
    </tr>
    <tr>
      <td align="right">Tanggal Lahir :</td>
      <td><?php echo $row['tanggal_lahir']; ?></td>
    </tr>
  </tbody>
</table>
<br>
<hr>
 
 
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