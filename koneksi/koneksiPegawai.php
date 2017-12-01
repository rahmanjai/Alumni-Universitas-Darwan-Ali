<?php
//Deklarasi setingan server
	$server="localhost";
	$user="root";
	$pass="";
	$dbname="db_kepegawaian";
	
	// membuat koneksi
	$conn = new mysqli($server, $user, $pass, $dbname);
	
	if($conn->connect_error){
		die("Koneksi Gagal!".$conn->connect_error);
	}
	
?>