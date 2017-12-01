<!DOCTYPE html>
<html>
<head>
 <title>Edit Data</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />
</head>
<body>
<div id="wrapper">
<?php

?>
	<div ="header">
		<h2 align = "center">Rubah Data</h2>
	</div>

  <div id="content">
  <div id="article">

  <?php
	include "../koneksi/koneksiPemasaran.php";

	if (isset($_GET['id'])){


		$id=$_GET['id'];

		$query="SELECT  *
        FROM tb_pemasaran p
        LEFT JOIN tb_pelanggan a ON a.nik=p.nik
                LEFT JOIN tb_rumah b ON b.kode=p.kode
				WHERE	id='$id'";


		$hasil=mysqli_query($conn,$query);

		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
		}else{

		}
	}
  ?>

</table>

  <!--<input type="hidden" name="id" value="<?php// echo $id; ?>">-->
<form name="edit" action="editProses.php?id=<?php echo $row['id']; ?>" method="post">
  <table cellpadding="3" cellspacing="0" align="center">

  <tr>
    <td>NIK</td>
    <td>:</td>
    <td><input type="text" name="NIK" value="<?php echo $row['NIK']; ?>" size="10" disabled="disabled"></td>
  </tr>
  <tr>
    <td>Kode Rumah</td>
    <td>:</td>
    <td>
      <input type="text" value="<?php echo $row['kode']; ?>" name="kode" size="30" disabled="disabled">
    </td>
   </tr>
  <tr>
    <td>Type Rumah</td>
    <td>:</td>
    <td>
      <input type="text" value="<?php echo $row['type']; ?>" name="type" size="30" disabled="disabled">
    </td>
   </tr>
    <tr>
    <td>Jenis Rumah</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['jenis_rumah']; ?>" name="jenis_rumah" size="30" disabled="disabled"></td>
  </tr>
   <tr>
    <td>Tanggal Pesan</td>
    <td>:</td>
    <td><input type="date" value="<?php echo $row['tgl']; ?>"  name="tgl" size="30" required></td>
   </tr>
   <tr>
    <td>Uang DP</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['uang_dp']; ?>"  name="uang_dp" size="30" required></td>
   </tr>
    <tr>
    <td></td>
    <td></td>
    <td>
	<button type="submit" name="ubah">Submit</button>
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
