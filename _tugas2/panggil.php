<?php
	include ('../koneksi/koneksiPegawai.php');

	$term = trim(strip_tags($_GET['term']));

	$sql = "SELECT * FROM tb_pegawai WHERE nik like '%".$term."%'";
	$result = mysqli_query($conn, $sql);

	$array_set = array();

	while($row = mysqli_fetch_assoc($result)){
		$array_set [] = array(
			'label' => $row['nik'],
			'value' => $row['nik'],
			'nama' => $row['nama']
		);
	}
	echo json_encode($array_set);
?>