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
	if (isset($_GET['npm'])){
		include ("../koneksi/koneksiSqli.php");
		
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
						p.id_fakultas=f.id_fakultas AND
						m.npm='$npm'";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>
	<tr>
	  <td colspan="2" align="center">
	  <a href="mahasiswa.php">
	  Data Mahasiswa |
	  </a>
	  <a href="mahasiswaEdit.php?npm=<?php echo $row['npm']?>">
	  Rubah Data
	  </a>
	  </td>
	</tr>
    <tr>
      <td align="right" width="50%">NPM :</td>
      <td><?php echo $row['npm']; ?></td>
    </tr>
    <tr>
      <td align="right">Nama :</td>
      <td><?php echo $row['nama']; ?></td>
    </tr>
    <tr>
      <td align="right">Tempat Lahir :</td>
      <td><?php echo $row['tempat_lahir']; ?></td>
    </tr>
    <tr>
      <td align="right">Tanggal Lahir :</td>
      <td><?php echo $row['tanggal_lahir']; ?></td>
    </tr>
    <tr>
      <td align="right">Jenis Kelamin :</td>
      <td><?php echo $row['jk']; ?></td>
    </tr>
    <tr>
      <td align="right">Alamat :</td>
      <td><?php echo $row['alamat']; ?></td>
    </tr>
    <tr>
      <td align="right">Golongan Darah :</td>
      <td><?php echo $row['golongan_darah']; ?></td>
    </tr>
    <tr>
      <td align="right">HP :</td>
      <td><?php echo $row['no_hp']; ?></td>
    </tr>
    <tr>
      <td align="right">Email :</td>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
      <td align="right">Asal Sekolah :</td>
      <td><?php echo $row['asal_sekolah']; ?></td>
    </tr>
	<tr>
      <td align="right">Dosen PA :</td>
      <td><?php echo $row['nama_dosen']; ?></td>
    </tr>
	<tr>
      <td align="right">Prodi :</td>
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