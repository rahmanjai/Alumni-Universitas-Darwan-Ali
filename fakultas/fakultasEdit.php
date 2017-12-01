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
	
	if (isset($_GET['id_fakultas'])){
	
		$id_fakultas=$_GET['id_fakultas'];
	
		$query="SELECT * FROM 	tb_fakultas
    				WHERE	id_fakultas='$id_fakultas'";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>

</table>

  <!--<input type="hidden" name="id" value="<?php// echo $id; ?>">-->
<form name="editDosen" action="fakultasEditProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <td>ID Fakultas</td>
    <td>:</td>
    <td><input type="text" name="id_fakultas" value="<?php echo $row['id_fakultas']; ?>" size="30" required></td>
   </tr>
    <tr>
    <td>Nama Fakultas</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['nama_fakultas']; ?>" name="nama_fakultas" size="30" required></td>
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