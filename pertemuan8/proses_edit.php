<?php
$koneksi = mysqli_connect("localhost","root","","db_094");

// Ambil data dari form edit dan ubah jadi huruf kecil
$id = $_POST['id_mhs'];
$nama = htmlspecialchars(strtolower($_POST['nama_mhs']));
$alamat = htmlspecialchars(strtolower($_POST['alamat_mhs']));

// ubah jadi kapital
$Nama = ucwords($nama);
$Alamat = ucwords($alamat);

$sql = "UPDATE tbl_fitho SET 
nama_fitho = '$Nama',
alamat_fitho = '$Alamat'
WHERE id_fitho=$id";

$query = mysqli_query($koneksi,$sql);
if ($query) {
	header('location:data_fitho.php');
}
?>