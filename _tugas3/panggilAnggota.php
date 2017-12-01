<?php
	include ('../koneksi/koneksiKalamarga.php');

	$term = trim(strip_tags($_GET['term']));

	$sql = "SELECT * FROM tb_anggota WHERE no_anggota like '%".$term."%'";
	$result = mysqli_query($conn, $sql);

	$array_set = array();

	while($row = mysqli_fetch_assoc($result)){
		$array_set [] = array(
			'label' => $row['no_anggota'],
			'value' => $row['no_anggota'],
			'notlp' => $row['notlp'],
			'alamat' => $row['alamat'],
		);
	}
	echo json_encode($array_set);
?>
