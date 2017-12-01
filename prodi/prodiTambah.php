<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data Almuni</title>
 <link rel="stylesheet" type="text/css" href="style.css?v=1" />
 
 <script>
	
	function validasiProdi(){
		var id_prodi=document.prodi.id_prodi.value;
		var nama_prodi= document.prodi.nama_prodi.value;
		var id_fakultas= document.prodi.id_fakultas.value;
		if (id_prodi==""){
			alert("ID Prodi harus diisi");
		}else if(nama_prodi==""){
			alert("Nama Prodi Harus Diisi");	
		}else if(id_fakultas==""){
			alert("Fakultas Harus Dipilih");
		}else{
			alert("Data Prodi Berhasil Diisi");
		}
	}
	
</script>
 
</head>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#news">Berita</a></li>
  <li class="dropdown">
    <a class="dropbtn">Jurusan</a>
    <div class="dropdown-content">
      <a href="halo-fikom.php">Fikom</a>
      <a href="#">Bisnis</a>
      <a href="#">Magister Manajemen</a>
    </div>
  </li>
  <li class="dropdown">
    <a class="dropbtn" >Alumni</a>
    <div class="dropdown-content">
      <a href="alumni.php">Lihat Data Alumni</a>
	  <a href="tambah.php">Tambah Data Mahasiswa</a>
      <a href="tambahDosen.php">Tambah Data Dosen</a>
	  <a href="tambahFakultas.php">Tambah Data Fakultas</a>
	  <a href="tambahProdi.php">Tambah Data Program Studi</a>
    </div>
  </li>
</ul>
<div id="wrapper">
	
 <h2 align="center">Tambah Data Alumni</h2>
  
  <div id="content">
  <div id="article">
  
  <h3 align="center">Buat Data Program Studi</h3>
  <form name="prodi" action="tambah-proses-prodi.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   
   <tr>
    <td>ID Prodi</td>
    <td>:</td>
    <td><input type="text" name="id_prodi" size="30" required></td>
   </tr>
    <tr>
    <td>Nama Prodi</td>
    <td>:</td>
    <td><input type="text" name="nama_prodi" size="30" required></td>
   </tr>
   <tr>
    <td>Fakultas</td>
    <td>:</td>
    <td>
		<select name="id_fakultas" id="id_fakultas">
            <option value="">Pilih..</option>
            <?php
            // panggil file koneksi ke Mysql
            include "config.php";
            //Query tampilkan data dari database
            $sql  ="SELECT * FROM tb_fakultas ORDER BY id_fakultas";
            $query = mysql_query($sql, $koneksi) or die ("Query Salah :".mysql_error());
            while($data = mysql_fetch_array($query)){
              echo "<option value='$data[id_fakultas]'>$data[nama_fakultas]</option>";
            }?>
        </select>
	</td>
   </tr>
    <tr>
    <td></td>
    <td></td>
    <td><button type="submit"name="tambah" onclick="validasiProdi()">Submit</button>
   </td>
   </tr>
  </table>
 </form>
 
 </div>
 </div>
 <div id="fotter">
  Copyright &copy Rahman Jailani
  <br>
  2017
  </div>
 
 </div>
</body>
</html>