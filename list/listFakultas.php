<?php
//query SELECT untuk menampilkan kode dan nama prodi
$query = "SELECT * FROM tb_fakultas";

//menjalankan query diatas
$result=mysqli_query($conn,$query);
	
	if($result){
		//jika berhasil, program dibawah if akan berjalan
		while($row=mysqli_fetch_assoc($result)){
			?>
			<option value="<?php echo $row['id_fakultas']; ?>">
				<?php echo $row['nama_fakultas']; ?>
			</option>
			<?php
			
		}
	}
?>