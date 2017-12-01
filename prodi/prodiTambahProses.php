<?php
// digunakan untuk mengumpulkan nilai dalam sebuah form 
if(isset($_POST['tambah'])){
  //inlcude configurasi koneksi
 include('config.php');
  //menangkap data dari tambah.php
 $id_prodi = $_POST['id_prodi'];
 $nama_prodi = $_POST['nama_prodi'];
 $id_fakultas = $_POST['id_fakultas'];
 
  //qwey menympan datanya
  $simpan="INSERT INTO tb_prodi SET
        id_prodi='$id_prodi',
        nama_prodi='$nama_prodi',
		id_fakultas='$id_fakultas'";
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