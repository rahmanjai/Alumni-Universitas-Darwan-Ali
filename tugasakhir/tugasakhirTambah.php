<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data Almuni</title>
 <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" /> 
</head>
<body>

<?php

include "../menu/menuBar.html";
include "../koneksi/koneksiSqli.php"

?>
 
<div id="wrapper">
	
 <h2 align="center">Tambah Data</h2>
  
  <div id="content">
  <div id="article">
 
 <h3 align="center">Buat Data Tugas Akhir</h3>
  <form name="tugasakhir" action="tugasakhirTambahProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   
   <tr>
    <td align="right">ID Tugas Akhir</td>
    <td>:</td>
    <td><input type="text" name="id_tugas_akhir" size="6" required></td>
   </tr>
   <tr>
    <td align="right">NPM</td>
    <td>:</td>
    <td><input type="text" name="npm" size="13" required></td>
   </tr>
   <tr>
    <td align="right">IPK</td>
    <td>:</td>
    <td><input type="text" name="IPK" size="6" required></td>
   </tr>
   <tr>
    <td align="right">Judul Skripsi</td>
    <td>:</td>
    <td><input type="text" name="judul_skripsi" size="35" required></td>
   </tr>
   <tr>
    <td align="right">Bulan Awal Bimbingan</td>
    <td>:</td>
    <td><input type="date" name="bln_awl_bimbingan" size="30" required></td>
   </tr>
   <tr>
    <td align="right">Bulan Akhir Bimbingan</td>
    <td>:</td>
    <td><input type="date" name="bln_akhr_bimbingan" size="30" required></td>
   </tr>
   <tr>
    <td align="right">Jalur Laporan Akhir Studi</td>
    <td>:</td>
    <td><input type="text" name="jalur_skripsi" size="30" required></td>
   </tr>
   <tr>
    <td align="right">Pembimbing Satu</td>
    <td>:</td>
    <td>
      <select name="pembimbing"/>
      <?php 
      include "../list/listDosen.php"; 
      ?>
    </td>
   </tr>
    
    <tr>
    <td></td>
    <td></td>
    <td><button type="submit" name="tambah" onclick="validasiDosen()">Submit</button>
   </td>
   </tr>
  </table>
 </form>
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