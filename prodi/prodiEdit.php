<!DOCTYPE html>
<html>
<head>
 <title>Prodi Universitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
</head>
<body>
<div id="wrapper">
<?php

include "../menu/menuBar.html";

?>
	<div ="header">
		<h2 align = "center">Prodi Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  <h3 align = "center">Edit Data Prodi</h3>
  
  <?php
	include "../koneksi/koneksiSqli.php";
	
	if (isset($_GET['id_prodi'])){
	
		
		$id_prodi=$_GET['id_prodi'];
	
		$query="SELECT 	p.id_prodi,
						p.nama_prodi,
						f.nama_fakultas
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

</table>

  <!--<input type="hidden" name="id" value="<?php// echo $id; ?>">-->
<form name="editDosen" action="prodiEditProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <td>ID Prodi</td>
    <td>:</td>
    <td><input type="text" name="id_prodi" value="<?php echo $row['id_prodi']; ?>" size="30" required></td>
   </tr>
    <tr>
    <td>Nama Prodi</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['nama_prodi']; ?>" name="nama_prodi" size="30" required></td>
   </tr>
    <tr>
    <td>Fakultas</td>
    <td>:</td>
    <td>
		<select name="id_fakultas">
            <?php 
			include "../list/listFakultasSelect.php"; 
			?>
		</select>
	</td>
   </tr>
    <tr>
    <td></td>
    <td></td>
    <td>
	<button type="submit" name="ubah">Submit</button>
   </td>
   </tr>
  </table>
 </form>
 <br>
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