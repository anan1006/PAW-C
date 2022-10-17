<?php
$koneksi = mysqli_connect("localhost","root","","db_094");

// input data mahasiswa dan ubah jadi huruf kecil
$nama = htmlspecialchars(strtolower($_POST['nama_mhs']));
$alamat = htmlspecialchars(strtolower($_POST['alamat_mhs']));

// ubah jadi kapital
$Nama = ucwords($nama);
$Alamat = ucwords($alamat);

$sql = "INSERT INTO tbl_fitho(nama_fitho,alamat_fitho) VALUES ('$Nama','$Alamat')";
$hasil = mysqli_query($koneksi,$sql);
if ($hasil) {
	header('location:data_fitho.php');
}
?>