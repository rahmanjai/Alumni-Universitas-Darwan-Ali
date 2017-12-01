<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data Almuni</title>
 <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
 
</head>
<body>

<?php

include "../menu/menuBar.html";

?>
 
<div id="wrapper">
	
 <h2 align="center">Tambah Data</h2>
  
  <div id="content">
  <div id="article">
 
 <h3 align="center">Buat Data Yudisium</h3>
  <form name="dosen" action="yudisiumTambahProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   
    <td>ID Yudisium</td>
    <td>:</td>
    <td><input type="text" name="id_yudisium" size="10" required></td>
   </tr>
   <tr>
    <td>NPM</td>
    <td>:</td>
    <td><input type="text" name="npm" size="30" required></td>
   </tr>
    <tr>
    <td>Jenis Keluar</td>
    <td>:</td>
    <td><input type="text" name="jenis_keluar" size="30" required></td>
   </tr>
    <tr>
    <td>Tanggal Keluar</td>
    <td>:</td>
    <td><input type="date" name="tanggal_keluar" size="30" required></td>
   </tr>
   <tr>
    <td>SK Yudisium</td>
    <td>:</td>
    <td><input type="text" name="sk_yudisium" size="30" required></td>
   </tr>
   <tr>
    <td>Tanggal SK Yudisium</td>
    <td>:</td>
    <td><input type="date" name="tanggal_sk_yudisium" size="30" required></td>
   </tr>
   <tr>
    <td>No Ijasah</td>
    <td>:</td>
    <td><input type="text" name="no_ijasah" size="30" required></td>
   </tr>
    <tr>
    <td></td>
    <td></td>
    <td><button type="submit" name="tambah">Submit</button>
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