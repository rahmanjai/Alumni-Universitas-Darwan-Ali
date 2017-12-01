<?php
// digunakan untuk mengumpulkan nilai dalam sebuah form 
if(isset($_POST['tambah'])){
  //inlcude configurasi koneksi
 include('../koneksi/koneksiMagang.php');
  //menangkap data dari tambah.php
 $id_kegiatan = $_POST['id_kegiatan'];
 $NIS = $_POST['NIS'];
 $Jenis_Kegiatan = $_POST['jenis_kegiatan'];
 $Detil_Kegiatan = $_POST['Detil_Kegiatan'];
 
  //qwey menympan datanya
  $simpan="INSERT INTO tkegiatan SET
        id_kegiatan='$id_kegiatan',
        NIS='$NIS',
        Jenis_Kegiatan='$Jenis_Kegiatan',
		    Detil_Kegiatan='$Detil_Kegiatan'";
$input = mysqli_query($conn,$simpan); //exekusinya
 //mencek sukses atau tidak
 if($input){
      header("location:./kegiatan.php?&proses=berhasil");
   }else{
    echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
  echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>