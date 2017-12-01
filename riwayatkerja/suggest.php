<?php
$con = mysql_connect('localhost','root','');
$db  = mysql_select_db('db_alumni',$con);

$src = addslashes($_POST['src']);
$query = mysql_query('select * from tb_mahasiswa where npm like "'.$src.'%" or nama like "'.$src.'%" ');
while($data=mysql_fetch_array($query)){

	echo '<span class="pilihan" 
			onclick="pilih_kota(\''.$data['npm'].' '.$data['nama'].'\');
			hideStuff(\'suggest\');">'.$data['npm'].' '.$data['nama'].'
		  </span><hr>';
	}
?>