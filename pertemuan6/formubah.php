<?php
$conn = mysqli_connect("localhost","root","","pertemuan5");
$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM tbl_mhs WHERE id_mhs=$id");
$data = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3">
  <h2>Ubah Jati Diri Mahasiswa</h2>
  <p>Silahkan ubah data jati diri mahasiswa menjadi pribadi yang lebih baik.</p>
  	
  <form action="actionubah.php" method="POST">
      <input type="hidden" name="id_mhs" value="<?php echo $data['id_mhs']?>">

    <div class="mb-3 mt-3">
            <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama_mhs" value="<?php echo $data['nama_mhs']?>" name="nama_mhs">

    <br>

      <label for="nama_alamat">Alamat Mahasiswa</label>
      <input type="text" class="form-control" id="nama_alamat" value="<?php echo $data['nama_alamat']?>" name="nama_alamat">

    <br>

      <label for="sel1" class="form-label">Pilih Program Studi (select one):</label>
    <select class="form-select" id="sel1" name="nama_prodi">
      <option>Program Studi...</option>
      <option value="1">1. Teknik Informatika</option>
      <option value="2">2. Sistem Informasi</option>
    </select>
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>


