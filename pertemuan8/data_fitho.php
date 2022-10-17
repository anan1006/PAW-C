<?php 
$koneksi = mysqli_connect("localhost","root","","db_094");
$sql = "SELECT * FROM tbl_fitho";
$hasil = mysqli_query($koneksi,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Output Pertemuan 8</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
<p>
	Nama	: Anandhari Alfitho Deanova<br>
	NIM		: 210411100094<br>
	Kelas	: PAW-C
</p>


  <h2>Menampilkan Data Mahasiswa</h2>

  <p>Berikut data mahasiswa :</p>
  <a href="tambah.php" class="btn btn-primary">Tambahkan Data Mahasiswa</a><br><br>  
  <table class="table">
    <thead>
      <tr>
        <th>ID Mahasiswa</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat Mahasiswa</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	while ($baris = mysqli_fetch_assoc($hasil)) {
    	?>
    	
      <tr>
        <td><?= $baris['id_fitho'] ?></td>
        <td><?= $baris['nama_fitho'] ?></td>
        <td><?= $baris['alamat_fitho'] ?></td>
        <td>
        	<a href="edit.php?id=<?= $baris['id_fitho']; ?>" class="btn btn-success">Edit</a> | 
        	<a href="hapus.php?id=<?= $baris['id_fitho']; ?>" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
        </td>
      </tr>

      <?php } ?>

    </tbody>
  </table>
</div>

</body>
</html>