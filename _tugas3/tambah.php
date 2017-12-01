<!DOCTYPE html>
<html>
<head>
  <title>Data</title>
  <!--
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
-->


  <script type="text/javascript" src="jquery-1.8.2.js" ></script>
  <script type="text/javascript" src="jquery-ui.js" ></script>
  <link type="text/css" href="jquery-ui.css" rel="stylesheet">

  <script type="text/javascript">
    $(function(){
        $("#no_anggota").autocomplete({
          source: "panggilAnggota.php",
          select: function(event, ui){
            $("#notlp").val(ui.item.notlp);
            $("#alamat").val(ui.item.alamat);
          }
        });
    });
  </script>
  <script type="text/javascript">
    $(function(){
        $("#kd_buku").autocomplete({
          source: "panggilBuku.php",
          select: function(event, ui){
            $("#judul").val(ui.item.judul);
            $("#tahun_terbit").val(ui.item.tahun_terbit);
          }
        });
    });
  </script>

</head>

<body>

<div id="wrapper">

<?php

include "../koneksi/koneksiPegawai.php"

?>

 <h2 align="center">Tambah Data</h2>

  <div id="content">
  <div id="article">

  <form name="kegiatan" action="tambahPros.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <tr>
    <td>ID / Nama</td>
    <td>:</td>
    <td>
      <input type="text" name="no_anggota" id="no_anggota"/>
    </td>
    <td></td>
    <td>Kode Buku</td>
    <td>:</td>
    <td><input type="text" name="kd_buku" id="kd_buku"/></td>
   </tr>

   <tr>
   <td>No Telp</td>
    <td>:</td>
    <td>
      <input type="text" name="notlp" id="notlp" disabled="disabled"/>
    </td>
    <td></td>
    <td>Judul Buku</td>
    <td>:</td>
    <td><input type="text" name="judul" id="judul" disabled="disabled"/></td>
   </tr>

   <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat" id="alamat" disabled="disabled"/></td>
    <td></td>
    <td>Tahun Terbit</td>
    <td>:</td>
    <td><input type="text" name="tahun_terbit" id="tahun_terbit" disabled="disabled"/></td>
   </tr>
  <tr>
    <td>Tanggal Pinjam</td>
    <td>:</td>
    <td>
      <input type="date" name="tanggal_pinjam" required>
  </td>
  </tr>
  <tr>
    <td>Tanggal Kembali</td>
    <td>:</td>
    <td>
      <input type="date" name="tanggal_kembali" required>
  </td>
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
  <p align="center">Copyright &copy Rahman Jailani
  <br>
  2017
</p>
  </div>

 </div>
</body>
</html>
