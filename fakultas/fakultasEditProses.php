<?php
include ("../koneksi/koneksiSqli.php");

if (isset($_POST['ubah'])){
	$id_fakultas=$_POST['id_fakultas'];
	$nama_fakultas=$_POST['nama_fakultas'];
	
	$query="UPDATE 	tb_fakultas
			SET 	id_fakultas='$id_fakultas',
					nama_fakultas='$nama_fakultas'
			WHERE 	id_fakultas='$id_fakultas'";
	$result=mysqli_query($conn,$query);
	if($result){
		header("location:./fakultasDetail.php?id_fakultas=$id_fakultas&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>