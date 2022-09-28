<?php 
  $conn = mysqli_connect("localhost","root","","pertemuan5");

  $sql = "SELECT id_mhs,nama_mhs,nama_alamat,nama_prodi FROM tbl_mhs m,tbl_prodi p WHERE m.id_prodi=p.id_prodi ORDER BY nama_mhs";
  $hasil = mysqli_query($conn,$sql);
  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mahasiswa Nganggur</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa Kurang Kerjaan</h2>
  <p>Ini adalah data beberapa mahasiswa nganggur tapi insyaallah punya potensi untuk menjadi orang hebat dimasa yang akan datang. aamiin. semoga mereka sehat selalu, sukses, masuk surga, banyak pahala, berguna bagi nusa dan bangsa, bisa melakukan apapun perintah allah, tidak durhaka kepada orang tua.</p>

  <a href="formtambah.php" target="blank"><button type="button" class="btn btn-primary">Tambah Data Mahasiswa Nganggur</button></a>

  <br><br>
  <table class="table">
    <thead>
      <tr class="table-success">
        <th>No</th>
        <!-- <th>ID Mahasiswa</th> -->
        <th>Nama Mahasiswa</th>
        <th>Alamat Mahasiswa</th>
        <th>Program Studi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $i = 1;
        while ($baris=mysqli_fetch_assoc($hasil)) {
       ?>
      <tr class="table-default">
        <td><?php echo $i ?></td>
        <!-- <td><?php echo $baris['id_mhs']; ?></td> -->
        <td><?php echo $baris['nama_mhs']; ?></td>
        <td><?php echo $baris['nama_alamat']; ?></td>
        <td><?php echo $baris['nama_prodi']; ?></td>
        <td>
          <a href="formubah.php?id=<?= $baris["id_mhs"]; ?>" class="btn btn-success">Edit</a> | 
          <a href="hapus.php?id=<?= $baris["id_mhs"]; ?>" class="btn btn-danger">Hapus</a>
          

        </td>
      </tr>
      <?php $i++; } ?>
     
      
      
    </tbody>
  </table>
</div>

</body>
</html>