<?php
include ("selectMahasiswa.php");
//query SELCT untuk menampilkan kode dan nama prodi
$query = "SELECT * FROM tb_fakultas";

//menjalankan query diatas
$result = mysqli_query($conn, $query);
	
	if($result){
		//jika berhasil, program dibawah if akan berjalan
		while($row=mysqli_fetch_assoc($result)){
			?>
			<option value="<?php echo $row['id_fakultas']; ?>"
			<?php if ($id_fakultas==$row['id_fakultas']){
				echo "selected";}?>> 
				<?php echo $row['nama_fakultas']; ?>
			</option>
			<?php
		}
	}
?>