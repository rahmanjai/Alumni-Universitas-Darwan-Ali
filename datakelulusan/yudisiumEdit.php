<!DOCTYPE html>
<html>
<head>
 <title>Alumni universitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
</head>
<body>
<div id="wrapper">
<?php

include "../menu/menuBar.html";

?>
	<div ="header">
		<h2 align = "center">Yudisium Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  <h3 align = "center">Data Yudisium</h3>
  
  <?php
	include "../koneksi/koneksiSqli.php";
	
	if (isset($_GET['id_yudisium'])){
	
		
		$id_yudisium=$_GET['id_yudisium'];
	
		$query="SELECT *
				FROM  tb_yudisium, tb_mahasiswa
        WHERE id_yudisium='$id_yudisium' AND 
              tb_mahasiswa.npm=tb_yudisium.npm";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>

</table>

  <!--<input type="hidden" name="id" value="<?php// echo $id; ?>">-->
<form name="editDosen" action="yudisiumEditProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <td>ID Yudisium</td>
    <td>:</td>
    <td><input type="text" name="id_yudisium" value="<?php echo $row['id_yudisium']; ?>" size="6" required></td>
   </tr>
    <tr>
    <td>NPM</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['npm']; ?>" name="nama" size="13" required></td>
   </tr>
    <tr>
    <td>Jenis Keluar</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['jenis_keluar']; ?>"  name="jenis_keluar" size="5" required></td>
   </tr>
   <tr>
    <td>Tanggal Keluar</td>
    <td>:</td>
    <td><input type="date" value="<?php echo $row['tanggal_keluar']; ?>"  name="tanggal_keluar" size="30" required></td>
   </tr>
   <tr>
    <td>SK Yudisium</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['sk_yudisium']; ?>"  name="sk_yudisium" size="30" required></td>
   </tr>
   <tr>
    <td>Tanggal SK Yudisium</td>
    <td>:</td>
    <td><input type="date" value="<?php echo $row['tanggal_sk_yudisium']; ?>"  name="tanggal_sk_yudisium" size="30" required></td>
   </tr>
   <tr>
    <td>No Ijasah</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['no_ijasah']; ?>"  name="no_ijasah" size="5" required></td>
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