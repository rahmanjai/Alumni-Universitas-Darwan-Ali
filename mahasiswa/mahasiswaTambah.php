<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Almuni</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
</head>

<body>

<div id="wrapper">

<?php

include "../menu/menuBar.html";
include "../koneksi/koneksiSqli.php"

?>
	
 <h2 align="center">Tambah Data Mahasiswa</h2>
  
  <div id="content">
  <div id="article">
  
  <form name="mahasiswa" action="mahasiswaTambahProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <td>NPM</td>
    <td>:</td>
    <td><input type="text" name="npm" size="30" required></td>
   </tr>
    <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30" required></td>
   </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat" size="30" required></td>
   </tr>
   <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
	<td>
	<input type="radio" name="jk" id="radio" value="Pria" />
	Pria
    <input type="radio" name="jk" id="radio2" value="Wanita" />
	Wanita
	</td>
   </tr>
   <tr>
    <td>No HP</td>
    <td>:</td>
    <td><input type="text" name="no_hp" size="30" required></td>
   </tr>
   <tr>
    <td>Golongan Darah</td>
    <td>:</td>
    <td><input type="text" name="golongan_darah" size="30" required></td>
   </tr>
   <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><input type="text" name="tempat_lahir" size="30" required></td>
   </tr>
   <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" name="tanggal_lahir" size="30" required></td>
   </tr>
   <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" name="email" size="30" required></td>
   </tr>
   <tr>
    <td>Asal Sekolah</td>
    <td>:</td>
    <td><input type="text" name="asal_sekolah" size="30" required></td>
   </tr>
   <tr>
    <td>Dosen PA</td>
    <td>:</td>
    <td>
		<select name="nid"/>
            <?php 
			include "../list/listDosen.php"; 
			?>
  
	</td>
   </tr>
  <tr>
    <td>Prodi</td>
    <td>:</td>
    <td>
		<select name="id_prodi"/>
            <?php 
			include "../list/listProdi.php"; 
			?>
	</td>
    <tr>
    <td></td>
    <td></td>
    <td><button type="submit"name="tambah">Submit</button>
   </td>
   </tr>
  </table>
 </form>
 
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