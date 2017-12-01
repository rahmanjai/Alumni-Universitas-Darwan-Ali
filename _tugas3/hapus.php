<?php

include('../koneksi/koneksiPegawai.php');

	$q = "DELETE FROM tb_riwayatgol WHERE id_riwayat = '$_GET[id_riwayat]'";
	$hasil = $conn->query($q);
	header('location:kepegawaian.php');

?>
