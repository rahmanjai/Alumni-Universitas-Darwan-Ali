<?php
include ("../koneksi/koneksiPemasaran.php");

if (isset($_POST['ubah'])){
	$id=$_GET['id'];
	$tgl=$_POST['tgl'];
	$uang_dp=$_POST['uang_dp'];
	
	$query="UPDATE 	tb_pemasaran
			SET tgl='$tgl',
				uang_dp='$uang_dp'
			WHERE	id='$id'";
	$result=mysqli_query($conn,$query);
	if($result){
		header("location:./tampilData.php?id=$id&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>