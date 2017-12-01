<?php
// digunakan untuk mengumpulkan nilai dalam sebuah form
if(isset($_POST['tambah'])){
  //inlcude configurasi koneksi
 include('../koneksi/koneksiPemasaran.php');
  //menangkap data dari tambah.php
 $NIK = $_POST['NIK'];
 $kode = $_POST['kode'];
 $tgl = $_POST['tgl'];
 $uang_dp = $_POST['uang_dp'];

  //qwey menympan datanya
  $simpan="INSERT INTO tb_pemasaran SET
        NIK='$NIK',
        kode='$kode',
        tgl='$tgl',
        uang_dp='$uang_dp'
        ";
$input = mysqli_query($conn,$simpan); //exekusinya
 //mencek sukses atau tidak
 if($input){
      header("location:./tampilData.php?&proses=berhasil");
   }else{
    echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
  echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
   }

}else{


 echo '<script>window.history.back()</script>';

}
?>
