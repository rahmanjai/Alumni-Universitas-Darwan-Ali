<?php

include('../koneksi/koneksiSqli.php');
	
	$q = "DELETE FROM tb_dosen WHERE nid='$_GET[nid]'";
	$hasil = $conn->query($q);
	header('location:dosen.php');
	
?>