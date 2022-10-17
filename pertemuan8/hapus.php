<?php 

$koneksi = mysqli_connect("localhost","root","","db_094");
$id = $_GET['id'];
$sql = "DELETE FROM tbl_fitho WHERE id_fitho = $id";
$hasil = mysqli_query($koneksi,$sql);

if ($hasil) {
	header('location:data_fitho.php');
}

 ?>