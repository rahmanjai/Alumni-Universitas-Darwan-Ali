<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data Almuni</title>
 <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
 
 <script>
	
	
	function validasiFakultas()
	{			
		var id_fakultas=document.fakultas.id_fakultas.value;
		var nama_fakultas = document.fakultas.nama_fakultas.value;
		if (id_fakultas==""){
			alert("ID Fakultas Harus Diisi");
			}
		else if (nama_fakultas==""){
			alert("Nama Fakultas Harus Diisi")
		}
		else{
			alert ("Data Berhasil Disimpan");
		}
	}
	
	
</script>
 
</head>
<body>

<?php
include "../menu/menuBar.html";
?>

<div id="wrapper">
	
 <h2 align="center">Tambah Data</h2>
  
  <div id="content">
  <div id="article">
 
 <h3 align="center">Buat Data Fakultas</h3>
  <form name="fakultas" action="fakultasTambahProses.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
   
   <tr>
    <td>ID Fakultas</td>
    <td>:</td>
    <td><input type="text" name="id_fakultas" size="30" required></td>
   </tr>
    <tr>
    <td>Nama Fakultas</td>
    <td>:</td>
    <td><input type="text" name="nama_fakultas" size="30" required></td>
   </tr>
    <tr>
    <tr>
    <td></td>
    <td></td>
    <td><button type="submit"name="tambah" onclick="validasiFakultas()">Submit</button>
   </td>
   </tr>
  </table>
 </form>
 <br>
 <br>
 <hr>
 
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