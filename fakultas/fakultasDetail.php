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
		<h2 align = "center">Fakultas Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  <h3 align = "center">Detail Data Fakultas</h3>
  
<table  align="center" width="500">
  <tbody>
  
  <?php
	if (isset($_GET['id_fakultas'])){
		include ("../koneksi/koneksiSqli.php");
		
		$id_fakultas=$_GET['id_fakultas'];
	
		$query="SELECT * FROM	tb_fakultas
				    WHERE	id_fakultas='$id_fakultas'";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>
	<tr>
	  <td colspan="2" align="center">
      <a href="fakultas.php">
        Data Fakultas |
      </a>
      <a href="fakultasEdit.php?id_fakultas=<?php echo $row['id_fakultas']?>">
        Rubah Data
      </a>
	  </td>
	</tr>
    <tr>
      <td align="right" width="50%">ID Fakultas :</td>
      <td><?php echo $row['id_fakultas']; ?></td>
    </tr>
    <tr>
      <td align="right">Nama Fakultas :</td>
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