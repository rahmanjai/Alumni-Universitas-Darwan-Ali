<?php

include('../koneksi/koneksiSqli.php');
	
	$q = "DELETE FROM tb_yudisium WHERE id_yudisium='$_GET[id_yudisium]'";
	$hasil = $conn->query($q);
	header('location:yudisium.php');
	
?>