<!DOCTYPE html>
<html>
<head>
 <title>Yudisium niversitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
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
  <h3 align = "center">Detail Data Yudisium</h3>
  
<table  align="center" width="500">
  <tbody>
  
  <?php
  include ("../koneksi/koneksiSqli.php");

	if (isset($_GET['id_yudisium'])){
		
		$id_yudisium=$_GET['id_yudisium'];
	
		$query="SELECT *
				FROM 	tb_yudisium, tb_mahasiswa
				WHERE	id_yudisium='$id_yudisium' AND 
              tb_mahasiswa.npm=tb_yudisium.npm";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>
	<tr>
	  <td colspan="2" align="center">
      <a href="yudisium.php">
        Data Yudisium |
      </a>
      <a href="yudisiumEdit.php?id_yudisium=<?php echo $row['id_yudisium']?>">
        Rubah Data
      </a>
	  </td>
	</tr>
    <tr>
      <td align="right" width="50%">ID Yudisium :</td>
      <td><?php echo $row['id_yudisium']; ?></td>
    </tr>
    <tr>
      <td align="right">NPM :</td>
      <td><?php echo $row['npm']; ?></td>
    </tr>
	<tr>
      <td align="right">Nama :</td>
      <td><?php echo $row['nama']; ?></td>
    </tr>
	<tr>
      <td align="right">Jenis Keluar :</td>
      <td><?php echo $row['jenis_keluar']; ?></td>
    </tr>
    <tr>
      <td align="right">Tanggal Keluar :</td>
      <td><?php echo $row['tanggal_keluar']; ?></td>
    </tr>
    <tr>
      <td align="right">SK Yudisium :</td>
      <td><?php echo $row['sk_yudisium']; ?></td>
    </tr>
    <tr>
      <td align="right">Tanggal SK Yudisium :</td>
      <td><?php echo $row['tanggal_sk_yudisium']; ?></td>
    </tr>
    <tr>
      <td align="right">No Ijasah :</td>
      <td><?php echo $row['no_ijasah']; ?></td>
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