<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data Almuni</title>
 <link rel="stylesheet" type="text/css" href="style.css?v=1" />
 
 <script>
	function validasiMahasiswa()
	{			
		var npm=document.mahasiswa.npm.value;
		var nama = document.mahasiswa.nama.value;
		var alamat = document.mahasiswa.alamat.value;
		var jk = document.mahasiswa.jk.value;
		var no_hp = document.mahasiswa.no_hp.value;
		var golongan_darah = document.mahasiswa.golongan_darah.value;
		var tempat_lahir=document.mahasiswa.tempat_lahir.value;
		var tanggal_lahir=document.mahasiswa.tanggal_lahir.value;
		var email=document.mahasiswa.email.value;
		var asal_sekolah=document.mahasiswa.asal_sekolah.value;
		if (npm=="")
		{alert("NPM Harus Diisi");}
		else if (nama=="")
		{alert("Nama Harus Diisi");}
		else if (alamat=="")
		{alert("Alamat Harus Diisi");}
		else if (jk=="")
		{alert ("Jenis Kelamin Harus Dipilih");}
		else if (no_hp=="")
		{alert ("Nomor HP Harus Diisi");}		
		else if (golongan_darah =="")
		{alert ("Golongan Darah Harus Diisi");}
		else if (tempat_lahir=="")
		{alert("Tempat Lahir Harus Diisi");}
		else if (tanggal_lahir=="")
		{alert("Tanggal Lahir Diisi");}
		else if (email=="")
		{alert("Email Harus Diisi");}
		else if (asal_sekolah=="")
		{alert("Asal Sekolah Harus Diisi");}
		else
		{alert ("Data Berhasil Disimpan");}
	}
	
</script>
 
</head>
<body>

<div id="wrapper">

<?php

include "menuBar.php";

?>
	
 <h2 align="center">Tambah Data Alumni</h2>
  
  <div id="content">
  <div id="article">
  
  <h3 align="center">Buat Data Mahasiswa</h3>
  <form name="mahasiswa" action="tambah-proses.php" method="post">
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
    <td></td>
    <td></td>
    <td><button type="submit"name="tambah" onclick="validasiMahasiswa()">Submit</button>
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