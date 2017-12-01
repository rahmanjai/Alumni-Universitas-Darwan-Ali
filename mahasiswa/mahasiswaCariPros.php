<html>
<head>
	<style type="text/css">
		table{
		}
	</style>
</head>
<body>

	<table border="1px">
				<tr>
					<td>NPM</td>
					<td>Nama</td>
					<td>Alamat</td>
					<td>Tanggal Lahir</td>
				</tr>
	<?php
	include('../koneksi/koneksiSqli.php');
	$textcari = $_POST['teksCari'];

	if(isset($_POST['cari'])){
		$sql = "SELECT * FROM tb_mahasiswa WHERE nama like '$textcari%'";
		$hasil = mysqli_query($conn, $sql);
		if ($hasil){
		while ($row = mysqli_fetch_assoc($hasil)){
			?>
				<tr>
					<td><?php echo $row['npm']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['tanggal_lahir']; ?></td>
				</tr>
			
			<?php
			}
		}
	}
?>
</table>

</body>
</html>