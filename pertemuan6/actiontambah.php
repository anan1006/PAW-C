<?php 

	$conn = mysqli_connect("localhost","root","","pertemuan5");

	$nama = htmlspecialchars(strtolower($_POST['nama_mhs']));
	$alamat = htmlspecialchars(strtolower($_POST['nama_alamat']));
	$prodi = $_POST['nama_prodi'];



	// ubah jadi kapital
	$Nama = ucwords($nama);
	$Alamat = ucwords($alamat);


	$sql = "INSERT INTO tbl_mhs(id_prodi,nama_mhs,nama_alamat) VALUES ('$prodi','$Nama','$Alamat')";
	$hasil = mysqli_query($conn,$sql);

	if (!$hasil) {
		echo "
			<script>
				alert('Data Gagal Ditambahkan');
				document.location.href = 'datamhs.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data $Nama telah Berhasil Ditambahkan');
				document.location.href = 'datamhs.php';
			</script>
		";
	}
		
 ?>
