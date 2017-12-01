<?php
$host = "localhost";//ip host
$user = "root"; //user database
$pass = ""; // password database
$name = "db_alumni"; //nama database

$koneksi = mysql_connect($host, $user, $pass) 
	or die("Koneksi ke database gagal!");
	
mysql_select_db($name, $koneksi) 
	or die("Tidak ada database yang dipilih!");
?>