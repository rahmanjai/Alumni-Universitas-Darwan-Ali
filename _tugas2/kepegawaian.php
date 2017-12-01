<!DOCTYPE html>
<html>
<head>
 <title>Data Kegiatan</title>

  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
  <link rel="stylesheet" type="text/css" href="../style/styleTabel.css?v=1"/>


</head>
<body>
<div id="wrapper">
<!-- Navigasi Panel -->
<?php

?>

	<div ="header">
		<h2 align = "center">DATA KEPEGAWAIAN</h2>
	</div>

  <div id="content">
  <div id="article">

  	<div id="tam2">

  	</div>
 	<div id="tam">
  		<a href="pegawaiTambah.php">Tambah 1</a>
  	</div>
  	<div id="tam">
  		<a href="pegawaiTambah3.php">Tambah 2</a>
  	</div>

<table width="1000px" align="center" border="1" style="border-collapse:collapse">
	<tr>
    <th>Pilihan</th>
		<th>No</th>
		<th>NIK</th>
		<th width="150px">Nama</th>
		<th>Pangkat Golongan</th>
		<th>Nomor SK</th>
		<th>TMT Pangkat</th>
		<th>Tanggal SK</th>
		<th>Keterangan</th>
	</tr>
	<?php
	include ("../koneksi/koneksiPegawai.php");

	if(isset($_POST['cari'])){
		$textcari = $_POST['teksCari'];
		$sql = "SELECT * FROM tb_riwayatgol WHERE nama like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT 	*
				FROM tb_pegawai p
					RIGHT JOIN tb_riwayatgol r
					ON p.nik=r.nik";
		$hasil=mysqli_query($conn,$query);
	}

	if($hasil){
		$no = 1;
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
         <td width="110px">
			     <a href="pegawaiEdit.php?id_riwayat=<?php echo $row['id_riwayat']?>">
			            RUBAH |
		        </a>
              <a href="hapus.php?id_riwayat=<?php echo $row['id_riwayat']?>">
  			            HAPUS
  			     </a>
         </td>
			<td>
				<?php  echo $no ?>
			</td>
			<td>
				<?php echo $row['nik']; ?>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td align="center">
				<?php echo $row['pangkat_gol']; ?>
			</td>
			<td align="center">
				<?php echo $row['no_sk']; ?>
			</td>
			<td>
				<?php echo $row['tmt_pangkat']; ?>
			</td>
			<td>
				<?php echo $row['tgl_sk']; ?>
			</td>
			<td>
				<?php echo $row['keterangan']; ?>
			</td>
		</tr>
	<?php
		$no++;
		}
	}
	?>

</table>


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
