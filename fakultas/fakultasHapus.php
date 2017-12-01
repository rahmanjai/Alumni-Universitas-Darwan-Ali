<?php

include('../koneksi/koneksiSqli.php');
	
	$q = "DELETE FROM tb_fakultas WHERE id_fakultas='$_GET[id_fakultas]'";
	$hasil = $conn->query($q);
	header('location:fakultas.php');
	
?>