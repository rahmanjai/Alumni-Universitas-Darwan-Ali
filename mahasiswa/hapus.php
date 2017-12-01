<?php

include('koneksiSqli.php');

if(isset($_GET['npm'])){
	
	$npm=$_GET['npm'];
	
	$query = "DELETE FROM tb_mahasiswa WHERE npm='$npm'";
	$hasil = mysqli_query($conn,$sql);
	header('location:alumni.php');
 }
?>