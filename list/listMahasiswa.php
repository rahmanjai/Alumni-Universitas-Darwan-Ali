<?php
$query = "SELECT npm, nama FROM tb_mahasiswa";
	
$result = mysqli_query($conn, $query);
	
	if($result){
		while($row=mysqli_fetch_assoc($result)){
			?>
			<option value="<?php echo $row['npm']; ?>"> 
				<?php echo $row['nama']; ?>
					
				</option>
			<?php
		}
	}
?>