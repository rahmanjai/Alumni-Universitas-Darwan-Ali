<?php
$con = mysql_connect('localhost','root','');
$db  = mysql_select_db('db_kepegawaian',$con);

$src = addslashes($_POST['src']);
$query = mysql_query('select * from tb_pegawai where nik like "'.$src.'%" or nama like "'.$src.'%" ');
while($data=mysql_fetch_array($query)){

	echo '<span class="pilihan" 
			onclick="pilih_kota(\''.$data['nik'].'\');
			hideStuff(\'suggest\');">NIK : '.$data['nik'].' | Nama : '.$data['nama'].'
		  </span><hr>';
	}
?>