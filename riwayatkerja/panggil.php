<?php
	include ('../koneksi/koneksiSqli.php');

	$term = trim(strip_tags($_GET['term']));

	$sql = "SELECT * FROM tb_mahasiswa WHERE npm like '%".$term."%'";
	$result = mysqli_query($conn, $sql);

	$array_set = array();

	while($row = mysqli_fetch_assoc($result)){
		$array_set [] = array(
			'label' => $row['npm'],
			'value' => $row['npm'],
			'nama' => $row['nama']
		);
	}
	echo json_encode($array_set);
?>