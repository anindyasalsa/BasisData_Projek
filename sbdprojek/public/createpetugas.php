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
		<center><h2>Tambah Petugas Pemeriksaan Lansia</h2></center>
		<br>
		<div class="row justify-content-md-center">
		<div class="col-6">
			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
            <label for="id_petugas">ID Petugas</label>
	        <input type="text" class="form-control" name="id_petugas" id="id_petugas" placeholder="">
				
</div>

<div class="form-group">
    <label for="nama">Nama</label>
	<input type="text" class="form-control" name="nama" id="nama" placeholder="">
	</div>

 <div class="form-group">
	<label for="spesialis">Spesialis</label>
	<input type="text" class="form-control" name="spesialis" id="spesialis" placeholder="">
	</div>


	<center>
    <button type="submit" name="submit" class="btn btn-success mb-2 float-
                right" >Submit</button>
	<button type="button" name="batal" onclick="location.href='petugas.php'" class="btn btn-secondary mb-2">Batal</button>
</center?
</form>

<?php
    require 'koneksi.php';

    if(isset($_POST['submit'])) {
       
        $id_petugas= $_POST["id_petugas"];
        $nama = $_POST["nama"];
        $spesialis = $_POST["spesialis"];
       
        $query = "INSERT INTO petugas_kesehatan (nama, id_petugas, spesialis)
        VALUES ('$nama', '$id_petugas', '$spesialis')";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
	header("Location: petugas.php"); 
} else {
	// If there is an error, you can get the error message using mysqli_error
	echo "Data Gagal Ditambahkan. Error: " . mysqli_error($conn);
}
}