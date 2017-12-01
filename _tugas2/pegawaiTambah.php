<!DOCTYPE html>
<html>
<head>
  <title>Data Kegiatan</title>
  <!--
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
-->


  <script type="text/javascript" src="jquery-1.8.2.js" ></script>
  <script type="text/javascript" src="jquery-ui.js" ></script>
  <link type="text/css" href="jquery-ui.css" rel="stylesheet">

  <script type="text/javascript">
    $(function(){
        $("#nik").autocomplete({
          source: "panggil.php",
          select: function(event, ui){
            $("#nama").val(ui.item.nama);
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
	
 <h2 align="center">Tambah Data Kegiatan</h2>
  
  <div id="content">
  <div id="article">
  
  <form name="kegiatan" action="pegawaiTambahPros.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   <tr>
    <tr>
    <td>NIK</td>
    <td>:</td>
    <td>
      <input type="text" name="nik" id="nik"/>
    </td>
   </tr>
   </tr>
   <td>Nama</td>
    <td>:</td>
    <td>
      <input type="text" name="nama" id="nama" readonly="readonly"/>
    </td>
   </tr>
    <tr>
    <td>Golongan</td>
    <td>:</td>
    <td>
      <select name="pangkat_gol">
        <option value="">Pilih..</option>
        <option value ="A">A</option>
        <option value ="B">B</option>
        <option value ="C">C</option>
      </select> 

    </td>
   </tr>
  <tr>
    <td>Nomor SK</td>
    <td>:</td>
    <td>
      <input type="text" name="no_sk" size="30" required>
	</td>
  </tr>
  <tr>
    <td>TMT Golongan</td>
    <td>:</td>
    <td>
      <input type="date" name="tmt_pangkat" size="30" required>
  </td>
  </tr>
  <tr>
    <td>Tanggal SK</td>
    <td>:</td>
    <td>
      <input type="date" name="tgl_sk" size="30" required>
  </td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td>
      <input type="text" name="keterangan" size="30" required>
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