<?php 
	session_start();
	echo "<h2>Data Anda</h2>";
	echo "Nama : ".$_SESSION['nama'];
	echo "<br>";
	echo "NIM : ".$_SESSION['nim'];
	echo "<br>";
	echo "PRODI : ".$_SESSION['prodi'];
?>