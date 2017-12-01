<?php
include('../koneksi/koneksiSqli.php');

if(isset($_POST['tambah'])){
 
	$id_tugas_akhir = $_POST['id_tugas_akhir'];
	$npm = $_POST['npm'];
	$ipk = $_POST['IPK'];
	$judul_skripsi = $_POST['judul_skripsi'];
	$bln_awl_bimbingan = $_POST['bln_awl_bimbingan'];
	$bln_akhr_bimbingan = $_POST['bln_akhr_bimbingan'];
	$jalur_skripsi = $_POST['jalur_skripsi'];
	$pembimbing = $_POST['pembimbing'];
 
	$query="INSERT INTO tb_tugas_akhir SET
        id_tugas_akhir='$id_tugas_akhir',
        npm='$npm',
        ipk='$ipk',
        judul_skripsi='$judul_skripsi',
        bln_awl_bimbingan='$bln_awl_bimbingan',
        bln_akhr_bimbingan='$bln_akhr_bimbingan',
        jalur_skripsi='$jalur_skripsi',
        pembimbing='$pembimbing'";
	$result = mysqli_query($conn,$query); 

	if($result){
    	header("location:./tugasakhirDetail.php?id_tugas_akhir=$id_tugas_akhir&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>