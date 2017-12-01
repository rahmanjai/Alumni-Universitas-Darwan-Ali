<?php
include('../koneksi/koneksiSqli.php');

if(isset($_POST['tambah'])){
 
	$nomor_riwayat = $_POST['nomor_riwayat'];
	$npm = $_POST['npm'];
	$tempat_kerja = $_POST['tempat_kerja'];
	$jenis_pekerjaan = $_POST['jenis_pekerjaan'];
	$jabatan = $_POST['jabatan'];
	$tanggal_mulai = $_POST['tanggal_mulai'];
	$tanggal_keluar = $_POST['tanggal_keluar'];
	$keterangan = $_POST['keterangan'];
 
	$query="INSERT INTO tb_riwayat_kerja SET
        nomor_riwayat ='$nomor_riwayat',
        npm ='$npm',
        tempat_kerja = '$tempat_kerja',
        jenis_pekerjaan = '$jenis_pekerjaan',
        jabatan = '$jabatan',
        tanggal_mulai = '$tanggal_mulai',
        tanggal_keluar = '$tanggal_keluar',
		keterangan = '$keterangan'";
	$result = mysqli_query($conn,$query); 

	if($result){
    	//header("location:./dosenDetail.php?nid=$nid&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>