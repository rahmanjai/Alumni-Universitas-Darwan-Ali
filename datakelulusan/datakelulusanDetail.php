<!DOCTYPE html>
<html>
<head>
  <style>
    body{
      font-family: roboto;
      font-size: 20px;
    }
  </style>
 <title>Data Kelulusan</title>
</head>
<body>
<div id="wrapper">

<!-- Navigasi Panel -->
<br>
<br>
		<h2 align = "center">
      DATA KELULUSAN UNIVERSITAS DARWAN ALI
    </h2>

  
  <div id="content">
  <div id="article">
  
<table  align="center" width="500">
  <tbody>
  
  <?php
	if (isset($_GET['npm'])){
		include ("../koneksi/koneksiSqli.php");
		
		$npm=$_GET['npm'];
	
		$query="SELECT *
				FROM 	tb_yudisium y,
              tb_mahasiswa m,
              tb_tugas_akhir ta,
              tb_dosen d
				WHERE	y.npm='$npm' AND 
              y.npm=m.npm AND 
              ta.npm=m.npm AND 
              ta.pembimbing=d.nid";
				
		$hasil=mysqli_query($conn,$query);
		
		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{
			
		}

	}
  ?>
  <tr>
      <td >NPM </td>
      <td><?php echo $row['npm']; ?></td>
    </tr>
	<tr>
      <td >Nama </td>
      <td><?php echo $row['nama']; ?></td>
    </tr>
	<tr>
      <td >Jenis Keluar </td>
      <td><?php echo $row['jenis_keluar']; ?></td>
    </tr>
    <tr>
      <td >Tanggal Keluar </td>
      <td><?php echo $row['tanggal_keluar']; ?></td>
    </tr>
    <tr>
      <td >SK Yudisium </td>
      <td><?php echo $row['sk_yudisium']; ?></td>
    </tr>
    <tr>
      <td >Tanggal SK Yudisium </td>
      <td><?php echo $row['tanggal_sk_yudisium']; ?></td>
    </tr>
    <tr>
      <td >IPK </td>
      <td><?php echo $row['IPK']; ?></td>
    </tr>
    <tr>
      <td >No Seri Ijasah </td>
      <td><?php echo $row['no_ijasah']; ?></td>
    </tr>
    <tr>
      <td >Judul Tugas Akhir/Skripsi </td>
      <td><?php echo $row['judul_skripsi']; ?></td>
    </tr>
    <tr>
      <td >Bulan Awal Bimbingan </td>
      <td><?php echo $row['bln_awl_bimbingan']; ?></td>
    </tr>
    <tr>
      <td >Bulan Akhir Bimbingan </td>
      <td><?php echo $row['bln_akhr_bimbingan']; ?></td>
    </tr>
    <tr>
      <td >Jalur Laporan Akhir Studi </td>
      <td><?php echo $row['jalur_skripsi']; ?></td>
    </tr>
    <tr>
      <td >Pembimbing</td>
      <td><?php echo $row['nama_dosen']; ?></td>
    </tr>



  </tbody>
</table>
<br>
<hr>
 
 
 </div>
 </div>
 </div>
</body>
</html> 

<?php
echo
"<script>
  window.print();
  window.history.back();
</script>";
?>