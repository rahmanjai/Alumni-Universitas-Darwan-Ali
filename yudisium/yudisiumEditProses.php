<?php
include ("../koneksi/koneksiSqli.php");

if (isset($_POST['ubah'])){
	$id_yudisium=$_POST['id_yudisium'];
	$npm=$_POST['npm'];
	$jenis_keluar=$_POST['jenis_keluar'];
	$tanggal_keluar=$_POST['tanggal_keluar'];
	$sk_yudisium=$_POST['sk_yudisium'];
	$tanggal_sk_yudisium=$_POST['tanggal_sk_yudisium'];
	$no_ijasah=$_POST['no_ijasah'];
	
	$query="UPDATE 	tb_yudisium
			SET id_yudisium='$id_yudisium',
				npm='$npm',
				jenis_keluar='$jenis_keluar', 
				tanggal_keluar='$tanggal_keluar',
				sk_yudisium='$sk_yudisium',
				tanggal_sk_yudisium='$tanggal_sk_yudisium',
				no_ijasah='$no_ijasah'
			WHERE 	id_yudisium='$id_yudisium'";
	$result=mysqli_query($conn,$query);
	if($result){
		header("location:./yudisiumDetail.php?id_yudisium=$id_yudisium&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>