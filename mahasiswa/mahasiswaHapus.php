<?php

include('../koneksi/koneksiSqli.php');
	
	$q = "DELETE FROM tb_mahasiswa WHERE npm='$_GET[npm]'";
	$hasil = $conn->query($q);
	header('location:mahasiswa.php');
	
?>