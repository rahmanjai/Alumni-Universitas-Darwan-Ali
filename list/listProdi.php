<?php
//query SELECT untuk menampilkan kode dan nama prodi
$query = "SELECT id_prodi, nama_prodi FROM tb_prodi";

//menjalankan query diatas
$result=mysqli_query($conn,$query);
	
	if($result){
		//jika berhasil, program dibawah if akan berjalan
		while($row=mysqli_fetch_assoc($result)){
			?>
			<option value="<?php echo $row['id_prodi']; ?>">
				<?php echo $row['nama_prodi']; ?>
			</option>
			<?php
			
		}
	}
?>