<?php
include ("koneksiSqli.php");

if (isset($_GET['nid'])){
	$nid=$_GET['nid'];
	$query="SELECT * FROM tb_dosen WHERE nid='$nid'";
	$result=mysqli_query($conn,$query);
	
	if (mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
	}
	else {
		
	}
}
else {
	
}
?>