<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Universitas Darwan Ali</title>
<link rel="stylesheet" type="text/css" href="../1746.css" />

<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<link href="jquery-ui.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
	$(function(){
	$("#npm").autocomplete({
	source: "autonpm.php",
	select: function(event, ui){
	$("#nama_mhs").val(ui.item.nama_mhs);
	}
	});
	});
</script>

</head>

<body>
<?php
include ('../Koneksi/koneksi.php');
?>
<div class="wrapper">
<div class="header"><h2><img src="../img/Logo+UNDA+1000px.png" width="50" height="47" />Universitas Darwan Ali</h2>
	
  </div>
  <nav>
	<ul>
		<li><a href="../1746.php">Home</a></li>
		<li><a href="#">Input Data</a>
			<ul>
				<li><a href="../Fakultas/Input Fakultas.php">Fakultas</a></li>
				<li><a href="../Prodi/Input Prodi.php">Prodi</a></li>
				<li><a href="../Mahasiswa/Input Mahasiswa.php">Mahasiswa</a></li>
				<li><a href="../Dosen/Input Dosen.php">Dosen</a></li>
				<li><a href="Input Yudisium">Yudisium</a></li>
				<li><a href="../Skripsi/Input Skripsi.php">No Ijazah</a></li>
				<li><a href="../Riwayat/Input Riwayat.php">Riwayat Pekerjaan</a></li>
			</ul>
		</li>
        <li><a href="../Fakultas/Fakultas.php">Fakultas</a></li>
        <li><a href="../Prodi/Prodi.php">Prodi</a></li>
        <li><a href="../Mahasiswa/Mahasiswa.php">Mahasiswa</a></li>
        <li><a href="../Dosen/Dosen.php">Dosen</a></li>
		<li><a href="..Riwayat/Riwayat.php">Riwayat Pekerjaan</a></li>
		<li><a href="Yudisium.php">Yudisium</a></li>
		<li><a href="../Skripsi/Skripsi.php">No Ijazah</a></li>
		<li><a href="../Laporan/Laporan.php">Laporan </a></li>
		</ul>
</nav>
<div class="content">
<div class="sidebar"><p align="center"><img src="../img/Logo+UNDA+1000px.png" width="200" height="200" /></p></div>
  <div class="isi">
  <form id="form1" name="form1" method="post" action="Yudisium.php">
      <h2 align="center"><strong>
      <br /><br /><br />
      Input Data Yudisium
      </strong></h2>
      <table width="400" border="0" align="center">
        <tr>
          <td width="163">No</td>
          <td width="3"> :</td>
          <td width="200"><input type="text" name="no" id="no" width="215"/></td>
        </tr>
        <tr>
          <td>NPM</td>
          <td>:</td>
          <td><input name="npm" type="text" id="npm"/>
		   </td>
        </tr>
		<tr>
          <td>Nama Mahasiswa</td>
          <td>:</td>
          <td><input name="nama_mhs" type="text" id="nama_mhs" readonly="readonly"/>
		   </td>
        </tr>
        <tr>
          <td>Jenis Keluar</td>
          <td>:</td>
          <td><input type="text" name="jenis_keluar" id="jenis_keluar" width="215" /></td>
        </tr>
        <tr>
          <td>Tanggal Keluar</td>
          <td>:</td>
          <td><input type="date" name="tgl_keluar" id="tgl_keluar" width="215" /></td>
        </tr>
        <tr>
          <td>SK Yudisium</td>
          <td>:</td>
          <td><input type="text" name="sk_yudisium" id="sk_yudisium" width="215" /></td>
        </tr>
        <tr>
          <td>IPK</td>
          <td>:</td>
          <td><input type="text" name="ipk" id="ipk" width="215" /></td>
        </tr>
        <tr>
          <td colspan="3" align="center"><input type="submit" name="button" id="button" value="Simpan" /></td>
        </tr>
      </table>
    </form>
  </div>
</div>
<div class="fotter">
  <p><b>Copyright &copy;2017 by Ronny Effendi 1557201001746</b></p>
</div>
</div>
</body>
</html>
