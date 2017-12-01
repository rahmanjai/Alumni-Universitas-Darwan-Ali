<!DOCTYPE html>
<html>
<head>
 <title>Yudisium niversitas Darwan Ali</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
</head>
<body>
<div id="wrapper">

<!-- Navigasi Panel -->
<?php

include "../menu/menuBar.html";

?>

	<div ="header">
		<h2 align = "center">Yudisium Universitas Darwan Ali</h2>
	</div>
  
  <div id="content">
  <div id="article">
  <h3 align = "center">Detail Data Yudisium</h3>
  
<table  align="center" width="500">
  <tbody>
  
  <?php
	if (isset($_GET['id_tugas_akhir'])){
		include ("../koneksi/koneksiSqli.php");
		
		$id_tugas_akhir=$_GET['id_tugas_akhir'];
	
		$query="SELECT *
				FROM 	tb_tugas_akhir, 
              tb_mahasiswa,
              tb_dosen
				WHERE	id_tugas_akhir='$id_tugas_akhir' AND
              tb_dosen.nid=tb_tugas_akhir.pembimbing AND 
              tb_mahasiswa.npm=tb_tugas_akhir.npm";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}
	}
  ?>
	<tr>
	  <td colspan="2" align="center">
      <a href="tugasakhir.php">
        Data Tugas Akhir |
      </a>
      <a href="tugasakhirEdit.php?id_tugas_akhir=<?php echo $row['id_tugas_akhir']?>">
        Rubah Data
      </a>
	  </td>
	</tr>
    <tr>
      <td align="right" width="50%">ID Yudisium :</td>
      <td><?php echo $row['id_tugas_akhir']; ?></td>
    </tr>
    <tr>
      <td align="right">NPM :</td>
      <td><?php echo $row['npm']; ?></td>
    </tr>
	<tr>
      <td align="right">Nama :</td>
      <td><?php echo $row['nama']; ?></td>
    </tr>
	<tr>
      <td align="right">Jenis Keluar :</td>
      <td><?php echo $row['IPK']; ?></td>
    </tr>
    <tr>
      <td align="right">Tanggal Keluar :</td>
      <td><?php echo $row['judul_skripsi']; ?></td>
    </tr>
    <tr>
      <td align="right">Bulan Awal Bimbingan :</td>
      <td><?php echo $row['bln_awl_bimbingan']; ?></td>
    </tr>
    <tr>
      <td align="right">Bulan Akhir Bimbingan :</td>
      <td><?php echo $row['bln_akhr_bimbingan']; ?></td>
    </tr>
    <tr>
      <td align="right">Jalur Laporan Akhir Studi :</td>
      <td><?php echo $row['jalur_skripsi']; ?></td>
    </tr>
    <tr>
      <td align="right">Pembimbing Satu :</td>
      <td>
        <?php echo $row['nama_dosen']; ?> NID 
        <?php echo $row['pembimbing'];?>
      </td>
    </tr>

  </tbody>
</table>
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