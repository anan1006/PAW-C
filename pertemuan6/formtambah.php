<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3">
  <h2>Masukkan Jati Diri Mahasiswa</h2>
  <p>Silahkan masukkan data jati diri mahasiswa yang akan diinput ke dalam database.</p>
  	
  <form action="actiontambah.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama_mhs" placeholder="masukkan nama" name="nama_mhs" required>
    <br>
      <label for="nama_alamat">Alamat Mahasiswa</label>
      <input type="text" class="form-control" id="nama_alamat" placeholder="masukkan alamat" name="nama_alamat" required>
    <br>
      <label for="sel1" class="form-label">Pilih Program Studi (select one):</label>
    <select class="form-select" id="sel1" name="nama_prodi" required>
      <option selected>Program Studi...</option>
      <option value="1">1. Teknik Informatika</option>
      <option value="2">2. Sistem Informasi</option>
    </select>
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
