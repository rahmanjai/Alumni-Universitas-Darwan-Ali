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
	include "../koneksi/koneksiPegawai.php";

	if (isset($_GET['id_riwayat'])){


		$id_riwayat=$_GET['id_riwayat'];

		$query="SELECT *
				FROM 	tb_riwayatgol r
        LEFT JOIN tb_pegawai p
        ON r.nik=p.nik
				WHERE	id_riwayat='$id_riwayat'";


		$hasil=mysqli_query($conn,$query);

		if($hasil){
			$row=mysqli_fetch_assoc($hasil);
      $gologan= $row['pangkat_gol'];
		}else{

		}
	}
  ?>

</table>

  <!--<input type="hidden" name="id" value="<?php// echo $id; ?>">-->
<form name="edit" action="editProses.php?id_riwayat=<?php echo $row['id_riwayat']; ?>" method="post">
  <table cellpadding="3" cellspacing="0" align="center">

  <tr>
    <td>NIK</td>
    <td>:</td>
    <td><input type="text" name="nik" value="<?php echo $row['nik']; ?>" size="10" disabled="disabled"></td>
  </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama" size="30" disabled="disabled"></td>
  </tr>
    <tr>
    <td>Golongan</td>
    <td>:</td>
    <td>
      <select name="pangkat_gol">
        <option value="">Pilih..</option>
        <option value ="A"
        <?php if ($gologan=='A'){
        echo "selected";}?>>A</option>
        <option value ="B"
          <?php if ($gologan=='B'){
        echo "selected";}?>
        >B</option>
        <option value ="C"
          <?php if ($gologan=='C'){
        echo "selected";}?>
        >C</option>
      </select>
   </tr>
   <tr>
    <td>NO SK</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['no_sk']; ?>"  name="no_sk" size="30" required></td>
   </tr>
   <tr>
    <td>TMT Pangkat</td>
    <td>:</td>
    <td><input type="date" value="<?php echo $row['tmt_pangkat']; ?>"  name="tmt_pangkat" size="30" required></td>
   </tr>
   <tr>
    <td>Tanggal SK</td>
    <td>:</td>
    <td><input type="date" value="<?php echo $row['tgl_sk']; ?>"  name="tgl_sk" size="30" required></td>
   </tr>
   <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $row['keterangan']; ?>"  name="keterangan" size="30" required></td>
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
