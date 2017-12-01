<?php
	include ('../koneksi/koneksiMagang.php');

	$term = trim(strip_tags($_GET['term']));

	$sql = "SELECT * FROM tsiswa WHERE NIS like '%".$term."%'";
	$result = mysqli_query($conn, $sql);

	$array_set = array();

	while($row = mysqli_fetch_assoc($result)){
		$array_set [] = array(
			'label' => $row['NIS'],
			'value' => $row['NIS'],
			'nama' => $row['Nama_Siswa']
		);
	}
	echo json_encode($array_set);
?>