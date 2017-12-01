<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data Riwayat Kerja</title>
 <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
  <script src="../js/jquery-1.7.2.min.js"></script>
  <script src="../js/prmajax.js" ></script>

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
 
 <h3 align="center">Buat Data Riwaya Kerja</h3>
  <form name="dosen" action="riwayatKerjaTambahProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center" border="0px">
   
   <tr>
    <td>ID Riwayat</td>
    <td>:</td>
    <td><input type="text" name="nomor_riwayat" size="30" required></td>
   </tr>
    <tr>
    
    <td>NPM</td>
    <td>:</td>
    <td>
      <input id="src" type="text" onkeypress="suggest(this.value);" placeholder="Nama Mahasiswa"/>

       <div id="suggest">
      </div>

      <script type="text/javascript">
        hideStuff('suggest');
      </script>
   </tr>
    <tr>
    <td>Tempat Bekerja</td>
    <td>:</td>
    <td>
      <input placeholder="anu" type="text" name="tempat_kerja" size="30" required>

    </td>
   </tr>
   <tr>
    <td>Jenis Pekerjaan</td>
    <td>:</td>
    <td>
      <select name="jenis_pekerjaan">
        <option value="">Pilih..</option>
        <option value ="Pendidik">Pendidik</option>
        <option value ="Pemerintahan (BUMN)">
            Pemerintahan (BUMN)
        </option>
        <option value ="PNS">PNS</option>
        <option value ="Wiraswasta">Wiraswasta</option>
        <option value ="TNI/Polri">TNI/Polri</option>
        <option value ="Lainnya">Lainnya</option>
      </select> 

    </td>
   </tr>
   <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td><input type="text" name="jabatan" size="30" required></td>
   </tr>
   <tr>
    <td>Tanggal Mulai</td>
    <td>:</td>
    <td><input type="date" name="tanggal_mulai" size="30" required></td>
   </tr>
   <tr>
    <td>Tanggal Keluar</td>
    <td>:</td>
    <td><input type="date" name="tanggal_keluar" size="30"></td>
   </tr>
   <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><input type="text" name="keterangan" size="30" required></td>
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