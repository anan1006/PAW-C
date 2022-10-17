<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data Mahasiswa</title>
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


  <h2>Tambah Data Mahasiswa</h2>
  <form action="proses_tambah.php" method="POST">

    <div class="mb-3 mt-3">
      <label for="nama_mhs">Nama Mahasiswa:</label>
      <input type="text" class="form-control" id="nama_mhs" placeholder="Masukkan Nama Mahasiswa" name="nama_mhs">
    </div>

    <div class="mb-3">
      <label for="alamat_mhs">Alamat Mahasiswa</label>
      <input type="text" class="form-control" id="alamat_mhs" placeholder="Masukkan Alamat" name="alamat_mhs">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
