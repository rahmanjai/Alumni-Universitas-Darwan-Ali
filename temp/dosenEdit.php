<!DOCTYPE html>
<html>
<head>
 <title>Alumni universitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=1" />
</head>
<body>
<div id="wrapper">
<?php

include "menuBar.php";

?>
	<div ="header">
		<h2 align = "center">Alumni Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  <h3 align = "center">Data Alumni</h3>
  
  <?php
	include "koneksiSqli.php";
	
	if (isset($_GET['nid'])){
	
		
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

</table>

  <!--<input type="hidden" name="id" value="<?php// echo $id; ?>">-->
<form name="editDosen" action="dosenEditProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <td>NID Dosen</td>
    <td>:</td>
    <td><input type="text" name="nid" value="<?php echo $row['nid']; ?>" size="30" required></td>
   </tr>
    <tr>
    <td>Nama Dosen</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['nama_dosen']; ?>" name="nama" size="30" required></td>
   </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['alamat']; ?>"  name="alamat" size="30" required></td>
   </tr>
   <tr>
    <td>Bidang</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['bidang']; ?>"  name="bidang" size="30" required></td>
   </tr>
   <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['tempat_lahir']; ?>"  name="tempat_lahir" size="30" required></td>
   </tr>
   <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" value="<?php echo $row['tanggal_lahir']; ?>"  name="tanggal_lahir" size="30" required></td>
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