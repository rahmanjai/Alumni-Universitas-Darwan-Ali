<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data Almuni</title>
 <link rel="stylesheet" type="text/css" href="style.css?v=1" />
 
 <script>
	
	function validasiDosen()
	{			
		var nid=document.dosen.nid.value;
		var nama = document.dosen.nama.value;
		var alamat = document.dosen.alamat.value;
		var bidang = document.dosen.bidang.value;
		var tempat_lahir = document.dosen.tempat_lahir.value;
		var tanggal_lahir = document.dosen.tanggal_lahir.value;
		if (nid=="")
		{alert("NID Harus Diisi");}
		else if (nama=="")
		{alert("Nama Harus Diisi");}
		else if (alamat=="")
		{alert("Alamat Harus Diisi");}
		else if (bidang=="")
		{alert ("Bidang Harus Dipilih");}
		else if (tempat_lahir=="")
		{alert ("Tempat Lahir Harus Diisi");}		
		else if (tanggal_lahir =="")
		{alert ("Tanggal Lahir Harus Diisi");}
		else
		{alert ("Data Berhasil Disimpan");}
	}
	
</script>
 
</head>
<body>

<?php

include "menuBar.php";

?>
 
<div id="wrapper">
	
 <h2 align="center">Tambah Data</h2>
  
  <div id="content">
  <div id="article">
 
 <h3 align="center">Buat Data Dosen</h3>
  <form name="dosen" action="tambahDosenProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   
   <tr>
    <td>NID</td>
    <td>:</td>
    <td><input type="text" name="nid" size="30" required></td>
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
    <td>Bidang</td>
    <td>:</td>
    <td><input type="text" name="bidang" size="30" required></td>
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
    <td></td>
    <td></td>
    <td><button type="submit" name="tambah" onclick="validasiDosen()">Submit</button>
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