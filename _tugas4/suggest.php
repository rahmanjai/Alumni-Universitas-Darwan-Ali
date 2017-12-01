<?php
$con = mysql_connect('localhost','root','');
$db  = mysql_select_db('1826_property',$con);

$src = addslashes($_POST['src']);
$query = mysql_query('select * from tb_pelanggan where NIK like "'.$src.'%" or nama like "'.$src.'%" ');
while($data=mysql_fetch_array($query)){

	echo '<span class="pilihan" 
			onclick="pilih_kota(\''.$data['NIK'].'\');
			hideStuff(\'suggest\');">NIK : '.$data['NIK'].' | Nama : '.$data['nama'].'
		  </span><hr>';
	}
?>