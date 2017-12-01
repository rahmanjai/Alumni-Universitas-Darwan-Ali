<?php
include ("../koneksi/koneksiSqli.php");

if (isset($_POST['ubah'])){
	$nid=$_POST['nid'];
	$nama=$_POST['nama'];
	$alamat=$_POST['bidang'];
	$bidang=$_POST['bidang'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	
	$query="UPDATE 	tb_dosen
			SET nid='$nid',
				nama_dosen='$nama',
				alamat='$alamat', 
				bidang='$bidang',
				tempat_lahir='$tempat_lahir',
				tanggal_lahir='$tanggal_lahir'
					
			WHERE 	nid='$nid'";
	$result=mysqli_query($conn,$query);
	if($result){
		header("location:./dosenDetail.php?nid=$nid&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>