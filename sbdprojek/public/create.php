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
		<center><h2> Tambah Data Pasien Lansia</h2></center>
		<br>
		<div class="row justify-content-md-center">
		<div class="col-6">
			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="id_pasien">ID Pasien</label>
				<input type="text" class="form-control" name="id_pasien" id="id_pasien" placeholder="">
</div>

<div class="form-group">
	<label for="nama">Nama Lengkap</label>
	<input type="text" class="form-control" name="nama" id="nama" placeholder="">
	</div>

<div class="form-group">
	<label for="tgl_lahir">Tanggal Lahir</label>
	<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="">
	</div>

<div class="form-group">
	<label for="Jenis_kelamin">Jenis Kelamin</label>
	<input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="">
	</div>

<div class="form-group">
	<label for="No_Telp">No.Telp</label>
	<input type="varchar" class="form-control" name="no_telp" id="no_telp" placeholder="">
	</div>

<div class="form-group">
	<label for="desa">Desa</label>
	<input type="text" class="form-control" name="desa" id="desa" placeholder="">
	</div>

<div class="form-group">
	<label for="RT">RT</label>
	<input type="text" class="form-control" name="RT" id="RT" placeholder="">
	</div>

<div class="form-group">
	<label for="RW">RW</label>
	<input type="text" class="form-control" name="RW" id="RW" placeholder="">
	</div>


	<center>
    <button type="submit" name="submit" class="btn btn-success mb-2 float-
                right" >Submit</button>
	<button type="button" name="batal" onclick="location.href='index.php'" class="btn btn-secondary mb-2">Batal</button>
</center?
</form>

<?php
    require 'koneksi.php';

    if(isset($_POST['submit'])) {
        $id_pasien = $_POST["id_pasien"];
        $nama= $_POST["nama"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $no_telp = $_POST["no_telp"];
        $desa = $_POST["desa"];
        $RT = $_POST["RT"];
        $RW = $_POST["RW"];


        $query = "INSERT INTO pasien (id_pasien, nama, tgl_lahir, jenis_kelamin, no_telp, desa, RT, RW) VALUES ('$id_pasien', '$nama', '$tgl_lahir', '$jenis_kelamin', '$no_telp', '$desa', '$RT', '$RW')";
        $hasil = mysqli_query($conn, $query);        
        
		if ($hasil) {
			header("Location: index.php"); 
		} else {
			// If there is an error, you can get the error message using mysqli_error
			echo "Data Gagal Ditambahkan. Error: " . mysqli_error($conn);
		}
	}
?>