<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Output Pertemuan 2</title>
</head>
<body>
	<h1>Kenalan</h1><br>
	<h2>Tipe data String</h2>
	<?php
		echo "Nama : Anandhari Alfitho Deanova<br>";
		$NIM = 210411100094;
		echo "NIM : ".$NIM;
	?>

	<br><br>

	<h2>Tipe data Float</h2>
	<?php  
		$a = 2.5;
		$b = 3.7;
		$c = $a + $b;
		echo $a." + ".$b." = ".$c;
	?>

	<br><br>
	<h2>Tipe data Array</h2>
	<?php
	$namaku = array("anandhari","alfitho","deanova");
	print_r($namaku);
	?>

</body>
</html>