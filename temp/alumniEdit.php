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
	include "selectMahasiswa.php";
	if (isset($_GET['npm'])){
	
		
		$npm=$_GET['npm'];
	
		$query="SELECT 	m.npm, 
						m.nama, 
						m.tempat_lahir, 
						m.tanggal_lahir, 
						m.jk,
						m.alamat,
						m.golongan_darah,
						m.no_hp,
						m.email,
						m.asal_sekolah,
						d.nama_dosen,
						p.nama_prodi,
						f.nama_fakultas
				FROM 	tb_mahasiswa m,
						tb_prodi p,
						tb_fakultas f,
						tb_dosen d
				WHERE	m.nid=d.nid AND
						m.id_prodi=p.id_prodi AND
						m.npm='$npm'";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>

</table>

  <!--<input type="hidden" name="id" value="<?php// echo $id; ?>">-->
<form name="editAlumni" action="alumniEditProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <td>NPM</td>
    <td>:</td>
    <td><input type="text" name="npm" value="<?php echo $row['npm']; ?>" size="30" required></td>
   </tr>
    <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama" size="30" required></td>
   </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['alamat']; ?>"  name="alamat" size="30" required></td>
   </tr>
   <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
	<td>

	<label><input type="radio" name="jk" value="Pria" <?php if($row['jk']=="Pria"){ echo "checked";}?>> Pria</label>
    <label><input type="radio" name="jk" value="Wanita" <?php if($row['jk']=="Wanita"){ echo "checked";}?>>Wanita</label>
	
	</td>
   </tr>
   <tr>
    <td>No HP</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['no_hp']; ?>"  name="no_hp" size="30" required></td>
   </tr>
   <tr>
    <td>Golongan Darah</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['golongan_darah']; ?>"  name="golongan_darah" size="30" required></td>
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
    <td>Email</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['email']; ?>"  name="email" size="30" required></td>
   </tr>
   <tr>
    <td>Asal Sekolah</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['asal_sekolah']; ?>"  name="asal_sekolah" size="30" required></td>
   </tr>
  <tr>
    <td>Dosen PA</td>
    <td>:</td>
    <td>
		<select name="nid">
            <?php 
			include "listDosenSelect.php"; 
			?>
		</select>
	</td>
   </tr>
  <tr>
    <td>Prodi</td>
    <td>:</td>
    <td>
		<select name="id_prodi">
            <?php 
			include "listProdiSelect.php"; 
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