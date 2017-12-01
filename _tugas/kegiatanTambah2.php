<!DOCTYPE html>
<html>
<head>
  <title>Data Kegiatan</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
  <script src="../js/jquery-1.7.2.min.js"></script>
  <script src="../js/prmajax.js" ></script>
</head>

<body>

<div id="wrapper">

<?php

include "../koneksi/koneksiMagang.php"

?>
	
 <h2 align="center">Tambah Data Kegiatan</h2>
  
  <div id="content">
  <div id="article">
  
  <form name="kegiatan" action="kegiatanTambahPros.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <td>ID Kegiatan</td>
    <td>:</td>
    <td><input type="text" name="id_kegiatan" size="10" maxlength="5" required></td>
   </tr>
    <tr>
    <td>NIS</td>
    <td>:</td>
    <td>
      <input id="src" type="text" onkeypress="suggest(this.value);" placeholder="Nama Mahasiswa" name="NIS" autocomplete="off" />

       <div id="suggest">
      </div>

      <script type="text/javascript">
        hideStuff('suggest');
      </script>
    </td>
   </tr>
    <tr>
    <td>Jenis Kegiatan</td>
    <td>:</td>
    <td>
    <select name="jenis_kegiatan">
        <option value="">Pilih..</option>
        <option value ="Seminar">Seminar</option>
        <option value ="Admin">PNS</option>
        <option value ="Admin">Wiraswasta</option>
      </select>
    </td>
   </tr>
  <tr>
    <td>Detil Kegiatan</td>
    <td>:</td>
    <td>
      <input type="text" name="Detil_Kegiatan" size="30" required>
	</td>
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