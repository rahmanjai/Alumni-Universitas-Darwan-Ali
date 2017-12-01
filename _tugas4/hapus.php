<?php

include('../koneksi/koneksiPemasaran.php');

	$q = "DELETE FROM tb_pemasaran WHERE id = '$_GET[id]'";
	$hasil = $conn->query($q);
	header('location:tampilData.php');

?>
