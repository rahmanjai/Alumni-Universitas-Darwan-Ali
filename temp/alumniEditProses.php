<?php
include ("koneksiSqli.php");

if (isset($_POST['ubah'])){
	$nama=$_POST['nama'];
	$npm=$_POST['npm'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$golongan_darah=$_POST['golongan_darah'];
	$no_hp=$_POST['no_hp'];
	$email=$_POST['email'];
	$asal_sekolah=$_POST['asal_sekolah'];
	$nid=$_POST['nid'];
	$id_prodi=$_POST['id_prodi'];
	
	$query="UPDATE 	tb_mahasiswa 
			SET 	nama='$nama',
					npm='$npm',
					tempat_lahir='$tempat_lahir',
					tanggal_lahir='$tanggal_lahir',
					jk='$jk',
					alamat='$alamat',
					golongan_darah='$golongan_darah',
					no_hp='$no_hp',
					email='$email',
					asal_sekolah='$asal_sekolah',
					id_prodi='$id_prodi',
					nid='$nid' 
			WHERE 	npm='$npm'";
	$result=mysqli_query($conn,$query);
	if($result){
		header("location:./alumniDetail.php?npm=$npm&proses=berhasil");
	}
	else{
		die("Ada Data yang error");
	}
}
?>