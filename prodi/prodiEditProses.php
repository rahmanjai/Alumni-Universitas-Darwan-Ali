<?php
include ("../koneksi/koneksiSqli.php");

if (isset($_POST['ubah'])){
	$id_prodi=$_POST['id_prodi'];
	$nama_prodi=$_POST['nama_prodi'];
	$id_fakultas=$_POST['id_fakultas'];
	
	$query="UPDATE 	tb_prodi
			SET 	id_prodi='$id_prodi',
					nama_prodi='$nama_prodi',
					id_fakultas='$id_fakultas'
			WHERE 	id_prodi='$id_prodi'";
	$result=mysqli_query($conn,$query);
	if($result){
		header("location:./prodiDetail.php?id_prodi=$id_prodi&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>