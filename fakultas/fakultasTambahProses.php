<?php
include('../koneksi/koneksiSqli.php');

if(isset($_POST['tambah'])){

 $id_fakultas = $_POST['id_fakultas'];
 $nama_fakultas  = $_POST['nama_fakultas'];

  $simpan="INSERT INTO tb_fakultas SET
		id_fakultas='$id_fakultas',
		nama_fakultas='$nama_fakultas'";
$input = mysqli_query($conn,$simpan);

 if($input){
	header("location:./fakultasDetail.php?id_fakultas=$id_fakultas&proses=berhasil");
   }else{
		die ("Gagal menambahkan data!");
   }
}
?>