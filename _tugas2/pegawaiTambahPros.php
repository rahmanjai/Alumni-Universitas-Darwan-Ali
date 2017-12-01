<?php
// digunakan untuk mengumpulkan nilai dalam sebuah form 
if(isset($_POST['tambah'])){
  //inlcude configurasi koneksi
 include('../koneksi/koneksiPegawai.php');
  //menangkap data dari tambah.php
 $nik = $_POST['nik'];
 $pangkat_gol = $_POST['pangkat_gol'];
 $no_sk = $_POST['no_sk'];
 $tmt_pangkat = $_POST['tmt_pangkat'];
 $tgl_sk = $_POST['tgl_sk'];
 $keterangan = $_POST['keterangan'];
 
  //qwey menympan datanya
  $simpan="INSERT INTO tb_riwayatgol SET
        nik='$nik',
        pangkat_gol='$pangkat_gol',
        no_sk='$no_sk',
        tmt_pangkat='$tmt_pangkat',
        tgl_sk='$tgl_sk',
		    keterangan='$keterangan'";
$input = mysqli_query($conn,$simpan); //exekusinya
 //mencek sukses atau tidak
 if($input){
      header("location:./kepegawaian.php?&proses=berhasil");
   }else{
    echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
  echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>