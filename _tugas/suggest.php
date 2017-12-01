<?php
$con = mysql_connect('localhost','root','');
$db  = mysql_select_db('db_magang',$con);

$src = addslashes($_POST['src']);
$query = mysql_query('select * from tsiswa where NIS like "'.$src.'%" or Nama_Siswa like "'.$src.'%" ');
while($data=mysql_fetch_array($query)){

	echo '<span class="pilihan" 
			onclick="pilih_kota(\''.$data['NIS'].'\');
			hideStuff(\'suggest\');">NPM : '.$data['NIS'].' | Nama : '.$data['Nama_Siswa'].'
		  </span><hr>';
	}
?>