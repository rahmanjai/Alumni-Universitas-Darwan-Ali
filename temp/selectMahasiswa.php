<?php
include ("koneksiSqli.php");

if (isset($_GET['npm'])){
	$npm=$_GET['npm'];
	$query="SELECT nama, tempat_lahir, tanggal_lahir, jk, id_prodi, nid FROM tb_mahasiswa WHERE npm='$npm'";
	$result=mysqli_query($conn,$query);
	
	if (mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		$id_prodi=$row['id_prodi'];
		$nid=$row['nid'];
	}
	else {
		
	}
}
else {
	
}
?>