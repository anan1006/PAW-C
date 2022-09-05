<?php
	session_start();
	echo "<h2>DATA DITERIMA</h2>";
	$_SESSION['nama']=$_POST['namaku'];
	$_SESSION['nim']=$_POST['NIM'];
	$_SESSION['prodi']=$_POST['prodi'];
?>