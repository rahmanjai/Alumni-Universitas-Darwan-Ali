<?php
echo '

<div class="menu">

	
		<ul>
			<li>
				<div id="logoUnda">
				<img src="img/logoUnda.png" style="width:50px;height:50px;">
				</div>
			</li>
			<li>
				<div id="bannerUnda">
				Universitas Darwan Ali Sampit
				</div>
			</li>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="#">Berita</a></li>
		  <li class="dropdown">
			<a class="dropbtn">Jurusan</a>
			<div class="dropdown-content">
			  <a href="halo-fikom.php">Fikom</a>
			  <a href="#">Bisnis</a>
			  <a href="#">Magister Manajemen</a>
			</div>
		  </li>
		  <li class="dropdown">
			<a class="dropbtn" >Alumni</a>
			<div class="dropdown-content">
			  <a href="tugasakhir/tugasAkhir.php">Tugas Akhir</a>
			  <a href="yudisium/yudisium.php">Yudisium</a>
			  <a href="datakelulusan/datakelulusan.php">Data Kelulusan</a>
			  <a href="riwayatkerja/riwayatKerja.php">
			  Riwayat Kerja
			  </a>
			  
			</div>
		  </li>
		  <li class="dropdown">
			<a class="dropbtn">Akademik</a>
			<div class="dropdown-content">
			  <a href="mahasiswa/mahasiswa.php">Mahasiswa</a>
			  <a href="dosen/dosen.php">Dosen</a>
			  <a href="fakultas/fakultas.php">Fakultas</a>
			  <a href="prodi/prodi.php">Prodi</a>
			  
			  <!--
			  <a href="tambahMahasiswa.php">Tambah Data Mahasiswa</a>
			  <a href="tambahDosen.php">Tambah Data Dosen</a>
			  <a href="tambahFakultas.php">Tambah Data Fakultas</a>
			  <a href="tambahProdi.php">Tambah Data Program Studi</a>
			  -->
			</div>
		  </li>
		</ul>
	
</div>
';
?>