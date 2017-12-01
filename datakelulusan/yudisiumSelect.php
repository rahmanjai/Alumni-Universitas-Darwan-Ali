<?php
include ("koneksiSqli.php");

if (isset($_GET['id_yudisium'])){
	$id_yudisium=$_GET['id_yudisium'];
	$query="SELECT * FROM tb_yudisium WHERE id_yudisium='$id_yudisium'";
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