<?php
$query = "SELECT nid, nama_dosen FROM tb_dosen";
	
$result = mysqli_query($conn, $query);
	
	if($result){
		while($row=mysqli_fetch_assoc($result)){
			?>
			<option value="<?php echo $row['nid']; ?>"
			<?php 
			if ($nid==$row['nid']){
				echo "selected";} 
			?>> 
			<?php 
				echo $row['nama_dosen']; 
			?>
			</option>
<?php
		}
	}
?>