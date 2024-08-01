<!DOCTYPE html>
<html>
<head>
	<title>Praktikum Antar Muka Pengguna</title>

	<!-- Memuat file CSS Bootstrap secara luring -->
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<center><h2>Tambah Obat Pemeriksaan Lansia</h2></center>
		<br>
		<div class="row justify-content-md-center">
		<div class="col-6">
			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
            <label for="id_obat">ID Obat</label>
	        <input type="text" class="form-control" name="id_obat" id="id_obat" placeholder="">
				
</div>

<div class="form-group">
    <label for="id_pemeriksaan">ID Pemeriksaan</label>
	<input type="text" class="form-control" name="id_pemeriksaan" id="id_pemeriksaan" placeholder="">
	</div>

 <div class="form-group">
	<label for="nama_obat">Nama Obat</label>
	<input type="text" class="form-control" name="nama_obat" id="nama_obat" placeholder="">
	</div>

<div class="form-group">
	<label for="deskripsi">Deskripsi</label>
	<input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="">
	</div>

<div class="form-group">
	<label for="dosis">Dosis</label>
	<input type="text" class="form-control" name="dosis" id="dosis" placeholder="">
	</div>

<div class="form-group">
	<label for="instruksi_penggunaan">Instruksi Penggunaan</label>
	<input type="text" class="form-control" name="instruksi_penggunaan" id="instruksi_penggunaan" placeholder="">
	</div>


	<center>
    <button type="submit" name="submit" class="btn btn-success mb-2 float-
                right" >Submit</button>
	<button type="button" name="batal" onclick="location.href='obat.php'" class="btn btn-secondary mb-2">Batal</button>
</center?
</form>

<?php
    require 'koneksi.php';

    if(isset($_POST['submit'])) {
       
        $id_obat= $_POST["id_obat"];
        $id_pemeriksaan = $_POST["id_pemeriksaan"];
        $deskripsi = $_POST["deskripsi"];
        $dosis = $_POST["dosis"];
        $nama_obat = $_POST["nama_obat"];
        $instruksi_penggunaan = $_POST["instruksi_penggunaan"];


        $query = "INSERT INTO obat (id_pemeriksaan, id_obat, deskripsi, dosis, nama_obat, instruksi_penggunaan) 
        VALUES ('$id_pemeriksaan', '$id_obat', '$deskripsi', '$dosis', '$nama_obat', '$instruksi_penggunaan')";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
	header("Location: obat.php"); 
} else {
	// If there is an error, you can get the error message using mysqli_error
	echo "Data Gagal Ditambahkan. Error: " . mysqli_error($conn);
}
}