<!DOCTYPE html>
<html>
<head>
  <title>Data</title>
  
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
  <link rel="stylesheet" type="text/css" href="../style/styleTugas.css?v=1" />

    <script src="../js/jquery-1.7.2.min.js"></script>
  <script src="../js/prmajax.js" ></script>

  <script type="text/javascript" src="jquery-1.8.2.js" ></script>
  <script type="text/javascript" src="jquery-ui.js" ></script>
  <link type="text/css" href="jquery-ui.css" rel="stylesheet">

  <script type="text/javascript">
    $(function(){
        $("#kode").autocomplete({
          source: "panggil.php",
          select: function(event, ui){
            $("#type").val(ui.item.type);
            $("#jenis_rumah").val(ui.item.jenis_rumah);
          }
        });
    });
  </script>

</head>

<body>

<div id="wrapper">

<?php

include "../koneksi/koneksiPemasaran.php"

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
      
      <input id="src" type="text" onkeypress="suggest(this.value);" placeholder="Kode Pelanggan" name="NIK" autocomplete="off" />

       <div id="suggest">
      </div>

      <script type="text/javascript">
        hideStuff('suggest');
      </script>

    </td>
  </tr>

  <tr>
    <tr>
    <td>Kode / Jenis Rumah</td>
    <td>:</td>
    <td>
      <input type="text" name="kode" id="kode"/>
    </td>

   <tr>
   <td>Type Rumah</td>
    <td>:</td>
    <td>
      <input type="text" name="type" id="type" disabled="disabled"/>
    </td>
   </tr>

   <tr>
    <td>Jenis Rumah</td>
    <td>:</td>
    <td><input type="text" name="jenis_rumah" id="jenis_rumah" disabled="disabled"/></td>
   </tr>
  </tr>
  <tr>
    <td>Tanggal Pesan</td>
    <td>:</td>
    <td>
      <input type="date" value="<?php echo date('Y-m-d'); ?>" />
  </td>
  <tr>
    <td>Uang DP</td>
    <td>:</td>
    <td>
      <input type="text" name="uang_dp" required>
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
