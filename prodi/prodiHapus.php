<?php

include('../koneksi/koneksiSqli.php');
	
	$q = "DELETE FROM tb_prodi WHERE id_prodi='$_GET[id_prodi]'";
	$hasil = $conn->query($q);
	header('location:prodi.php');
	
?>