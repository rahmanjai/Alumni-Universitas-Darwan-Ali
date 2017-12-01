<?php
include ("../koneksi/koneksiPegawai.php");

if (isset($_POST['ubah'])){
	$id_riwayat=$_GET['id_riwayat'];
	$nik=$_POST['nik'];
	$pangkat_gol=$_POST['pangkat_gol'];
	$no_sk=$_POST['no_sk'];
	$tmt_pangkat=$_POST['tmt_pangkat'];
	$tgl_sk=$_POST['tgl_sk'];
	$keterangan=$_POST['keterangan'];
	
	$query="UPDATE 	tb_riwayatgol
			SET pangkat_gol='$pangkat_gol',
				no_sk='$no_sk',
				tmt_pangkat='$tmt_pangkat',
				tgl_sk='$tgl_sk',
				keterangan='$keterangan'
			WHERE	id_riwayat='$id_riwayat'";
	$result=mysqli_query($conn,$query);
	if($result){
		header("location:./kepegawaian.php?nik=$nik&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>