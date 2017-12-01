<?php

include('../koneksi/koneksiSqli.php');
	
	$q = "DELETE FROM tb_riwayat_kerja WHERE nomor_riwayat='$_GET[nomor_riwayat]'";
	$hasil = $conn->query($q);
	header('location:riwayatKerja.php');
	
?>