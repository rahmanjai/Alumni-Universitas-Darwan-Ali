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

<table width="900px" align="center" border="1" style="border-collapse:collapse">
	<tr>
    <th>Pilihan</th>
		<th>No</th>
		<th>Nomor Induk Kependudukan</th>
		<th width="150px">Nama</th>
		<th>Kode</th>
		<th>Jenis Rumah</th>
		<th>Type Rumah</th>
		<th>Tanggal Pesan</th>
		<th>Uang DP</th>
	</tr>
	<?php
	include ("../koneksi/koneksiPemasaran.php");

	if(isset($_POST['cari'])){
		$textcari = $_POST['teksCari'];
		$sql = "SELECT * FROM tb_pemasaran WHERE nama like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
	}else{
		$query="SELECT 	*
				FROM tb_pemasaran p
				LEFT JOIN tb_pelanggan a ON a.nik=p.nik
               	LEFT JOIN tb_rumah b ON b.kode=p.kode";
		$hasil=mysqli_query($conn,$query);
	}

	if($hasil){
		$no = 1;
		while($row=mysqli_fetch_assoc($hasil)){
	?>
		<tr>
         <td width="110px">
			     <a href="edit.php?id=<?php echo $row['id']?>">
			            RUBAH |
		        </a>
              <a href="hapus.php?id=<?php echo $row['id']?>">
  			            HAPUS
  			     </a>
         </td>
			<td>
				<?php  echo $no ?>
			</td>
			<td>
				<?php echo $row['NIK']; ?>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td align="center">
				<?php echo $row['kode']; ?>
			</td>
			<td align="center">
				<?php echo $row['jenis_rumah']; ?>
			</td>
			<td>
				<?php echo $row['type']; ?>
			</td>
			<td>
				<?php echo $row['tgl']; ?>
			</td>
			<td>
				<?php echo $row['uang_dp']; ?>
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
