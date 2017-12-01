<?php
// digunakan untuk mengumpulkan nilai dalam sebuah form 
if(isset($_POST['tambah'])){
  //inlcude configurasi koneksi
 include('config.php');
  //menangkap data dari tambah.php
 $npm = $_POST['npm'];
 $nama  = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $jk = $_POST['jk'];
 $no_hp = $_POST['no_hp'];
 $golongan_darah = $_POST['golongan_darah'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 $email = $_POST['email'];
 $asal_sekolah = $_POST['asal_sekolah'];
 
  //qwey menympan datanya
  $simpan="INSERT INTO tb_mahasiswa SET
        npm='$npm',
        nama='$nama',
		alamat='$alamat',
		jk='$jk',
		no_hp='$no_hp',
		golongan_darah='$golongan_darah',
		tempat_lahir='$tempat_lahir',
		tanggal_lahir='$tanggal_lahir',
		email='$email',
        asal_sekolah='$asal_sekolah'";
$input = mysql_query($simpan); //exekusinya
 //mencek sukses atau tidak
 if($input){
    echo 'Data berhasil di tambahkan! ';  //Pesan jika proses tambah sukses
  echo '<a href="index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
   }else{
    echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
  echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>