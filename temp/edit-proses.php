<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
  //inlcude atau memasukkan file koneksi ke database
 include('config.php');
  //jika tombol tambah benar di klik maka lanjut prosesnya
 $id   = $_POST['id']; //membuat variabel $id dan datanya dari inputan hidden id
 $nama  = $_POST['nama']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
 $hp   = $_POST['hp']; //membuat variabel $kelas dan datanya dari inputan dropdown Kelas
 $email     = $_POST['email']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
  //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE member_id='$id' <- diambil dari inputan hidden id
 $update = mysql_query("UPDATE member SET member_nama='$nama', member_email='$email', member_hp='$hp' WHERE member_id='$id'") or die(mysql_error());
  //jika query update sukses
 if($update){
    echo 'Data berhasil di simpan! ';  //Pesan jika proses simpan sukses
  echo '<a href="index.php?id='.$id.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
   }else{
    echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="edit.php?id='.$id.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
   }

}else{ //jika tidak terdeteksi tombol simpan di klik

 //redirect atau dikembalikan ke halaman edit
 echo '<script>window.history.back()</script>';

}
?>