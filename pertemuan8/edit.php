<?php
$koneksi = mysqli_connect("localhost","root","","db_094");
$id = $_GET['id'];

$sql = "SELECT * FROM tbl_fitho WHERE id_fitho = $id";

$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <p>
  Nama  : Anandhari Alfitho Deanova<br>
  NIM   : 210411100094<br>
  Kelas : PAW-C
</p>

  
  <h2>Edit Data Mahasiswa</h2>
  <form action="proses_edit.php" method="POST">

  	<input type="hidden" name="id_mhs" value="<?= $data['id_fitho']?>">

    <div class="mb-3 mt-3">
      <label for="nama_mhs">Nama Mahasiswa:</label>
      <input type="text" class="form-control" id="nama_mhs" value="<?= $data['nama_fitho']?>" name="nama_mhs">
    </div>

    <div class="mb-3">
      <label for="alamat_mhs">Alamat Mahasiswa</label>
      <input type="text" class="form-control" id="alamat_mhs" value="<?= $data['alamat_fitho']?>" name="alamat_mhs">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
