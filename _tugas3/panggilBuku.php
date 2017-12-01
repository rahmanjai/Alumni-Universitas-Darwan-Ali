<?php
	include ('../koneksi/koneksiKalamarga.php');

	$term = trim(strip_tags($_GET['term']));

	$sql = "SELECT * FROM tb_buku WHERE kd_buku like '%".$term."%'";
	$result = mysqli_query($conn, $sql);

	$array_set = array();

	while($row = mysqli_fetch_assoc($result)){
		$array_set [] = array(
			'label' => $row['kd_buku'],
			'value' => $row['kd_buku'],
			'judul' => $row['judul'],
			'tahun_terbit' => $row['tahun_terbit']
		);
	}
	echo json_encode($array_set);
?>
