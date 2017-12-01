<?php
	include ('../koneksi/koneksiPemasaran.php');

	$term = trim(strip_tags($_GET['term']));

	$sql = "SELECT * FROM tb_rumah WHERE kode like '%".$term."%' or jenis_rumah like '%".$term."%'";
	$result = mysqli_query($conn, $sql);

	$array_set = array();

	while($row = mysqli_fetch_assoc($result)){
		$array_set [] = array(
			'label' => $row['kode'] . ' ' . $row['jenis_rumah'],
			'value' => $row['kode'],
			'type' => $row['type'],
			'jenis_rumah' => $row['jenis_rumah'],
		);
	}
	echo json_encode($array_set);
?>
