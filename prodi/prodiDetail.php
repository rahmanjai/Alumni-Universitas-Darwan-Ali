<!DOCTYPE html>
<html>
<head>
 <title>Alumni universitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
</head>
<body>
<div id="wrapper">

<!-- Navigasi Panel -->
<?php

include "../menu/menuBar.html";

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
	if (isset($_GET['id_prodi'])){
		include ("../koneksi/koneksiSqli.php");
		
		$id_prodi=$_GET['id_prodi'];
	
		$query="SELECT *
				FROM 	tb_prodi p, 
						tb_fakultas f
				WHERE	p.id_prodi='$id_prodi' AND
						p.id_fakultas=f.id_fakultas";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>
	<tr>
	  <td colspan="2" align="center">
      <a href="prodi.php">
        Data Prodi |
      </a>
      <a href="prodiEdit.php?id_prodi=<?php echo $row['id_prodi']?>">
        Rubah Data
      </a>
	  </td>
	</tr>
    <tr>
      <td align="right" width="50%">ID Prodi :</td>
      <td><?php echo $row['id_prodi']; ?></td>
    </tr>
    <tr>
      <td align="right">Nama Prodi :</td>
      <td><?php echo $row['nama_prodi']; ?></td>
    </tr>
	<tr>
      <td align="right">Fakultas :</td>
      <td><?php echo $row['nama_fakultas']; ?></td>
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