<?php
// digunakan untuk mengumpulkan nilai dalam sebuah form
if(isset($_POST['tambah'])){
  //inlcude configurasi koneksi
 include('../koneksi/koneksiKalamarga.php');
  //menangkap data dari tambah.php
 $no_anggota = $_POST['no_anggota'];
 $kd_buku = $_POST['kd_buku'];
 $tanggal_pinjam = $_POST['tanggal_pinjam'];
 $tanggal_kembali = $_POST['tanggal_kembali'];

  //qwey menympan datanya
  $simpan="INSERT INTO tb_peminjaman SET
        no_anggota='$no_anggota',
        kd_buku='$kd_buku',
        tanggal_pinjam='$tanggal_pinjam',
        tanggal_kembali='$tanggal_kembali'
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
