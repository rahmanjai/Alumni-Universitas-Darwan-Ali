<?php
include ('../Koneksi/koneksi.php');

$term = trim(strip_tags ($_GET['term']));

$sql="SELECT * FROM tb_mhs WHERE npm like '%".$term."%'";
$result = mysqli_query($koneksi, $sql);

$array_set = array();

while($row = mysqli_fetch_assoc($result)){
	$array_set [] = array (
	'label' => $row['npm'],
	'value' => $row['npm'],
	'nama_mhs' => $row['nama_mhs']
	);
	}
	echo json_encode($array_set);
?>