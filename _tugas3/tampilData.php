<!DOCTYPE html>
<html>
<head>
 <title>Data</title>

  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
  <link rel="stylesheet" type="text/css" href="../style/styleTabel.css?v=1"/>


</head>
<body>
<div id="wrapper">
<!-- Navigasi Panel -->
<?php

?>

	<div ="header">
		<h2 align = "center">TAMPIL DATA</h2>
	</div>

  <div id="content">
  <div id="article">

  	<div id="tam2">

  	</div>
 	<div id="tam">
  		<a href="tambah.php">TAMBAH</a>
  	</div>

<table width="1000px" align="center" border="1" style="border-collapse:collapse">
	<tr>
    <th>Pilihan</th>
		<th>No</th>
		<th>Nomor Anggota</th>
		<th width="150px">Nama</th>
		<th>Kode Buku</th>
		<th>Judul Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
	</tr>
	<?php
	include ("../koneksi/koneksiKalamarga.php");

	if(isset($_POST['cari'])){
		$textcari = $_POST['teksCari'];
		$sql = "SELECT * FROM tb_peminjaman WHERE nama like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT 	*
				FROM tb_peminjaman p
					LEFT JOIN tb_anggota a ON a.no_anggota=p.no_anggota
               LEFT JOIN tb_buku b ON b.kd_buku=p.kd_buku ";
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
				<?php echo $row['no_anggota']; ?>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td align="center">
				<?php echo $row['kd_buku']; ?>
			</td>
			<td align="center">
				<?php echo $row['judul']; ?>
			</td>
			<td>
				<?php echo $row['tanggal_pinjam']; ?>
			</td>
			<td>
				<?php echo $row['tanggal_kembali']; ?>
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
