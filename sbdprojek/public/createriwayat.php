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
		<center><h2>Tambah Riwayat Check Up Lansia</h2></center>
		<br>
		<div class="row justify-content-md-center">
		<div class="col-6">
			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
            <label for="id_pemeriksaan">ID Pemeriksaan</label>
	        <input type="text" class="form-control" name="id_pemeriksaan" id="id_pemeriksaan" placeholder="">
				
</div>

<div class="form-group">
        <label for="id_pasien">ID Pasien</label>
		<input type="text" class="form-control" name="id_pasien" id="id_pasien" placeholder="">
	</div>

<div class="form-group">
	<label for="tgl_pemeriksaan">Tanggal Pemeriksaan</label>
	<input type="date" class="form-control" name="tgl_pemeriksaan" id="tgl_pemeriksaan" placeholder="">
	</div>

	<div class="form-group">
    <label for="berat_badan">Berat Badan</label>
    <div class="input-group">
        <input type="decimal" class="form-control" name="berat_badan" id="berat_badan" placeholder="">
        <div class="input-group-append">
            <span class="input-group-text">KG</span>
        </div>
    </div>

<div class="form-group">
	<label for="tekanan_darah">Tekanan Darah</label>
	<div class="input-group">
		<input type="varchar" class="form-control" name="tekanan_darah" id="tekanan_darah" placeholder="">
		<div class="input-group-append">
            <span class="input-group-text">mmHg</span>
        </div>
	</div>

<div class="form-group">
	<label for="gula_darah">Gula Darah</label>
	<div class="input-group">
		<input type="varchar" class="form-control" name="gula_darah" id="gula_darah" placeholder="">
		<div class="input-group-append">
            <span class="input-group-text">mg/dL</span>
        </div>
	</div>

<div class="form-group">
	<label for="riwayat_penyakit">Riwayat Penyakit</label>
	<input type="text" class="form-control" name="riwayat_penyakit" id="riwayat_penyakit" placeholder="">
	</div>

<div class="form-group">
	<label for="catatan">Keluhan/Catatan</label>
	<input type="text" class="form-control" name="catatan" id="catatan" placeholder="">
	</div>


	<center>
    <button type="submit" name="submit" class="btn btn-success mb-2 float-
                right" >Submit</button>
	<button type="button" name="batal" onclick="location.href='riwayat.php'" class="btn btn-secondary mb-2">Batal</button>
</center?
</form>

<?php
    require 'koneksi.php';

    if(isset($_POST['submit'])) {
       
        $id_pemeriksaan= $_POST["id_pemeriksaan"];
        $id_pasien = $_POST["id_pasien"];
        $tgl_pemeriksaan = $_POST["tgl_pemeriksaan"];
        $berat_badan = $_POST["berat_badan"];
        $tekanan_darah = $_POST["tekanan_darah"];
        $gula_darah = $_POST["gula_darah"];
        $riwayat_penyakit = $_POST["riwayat_penyakit"];
        $catatan = $_POST["catatan"];


        $query = "INSERT INTO riwayat_checkup(id_pasien, id_pemeriksaan, tgl_pemeriksaan, berat_badan, tekanan_darah, gula_darah, riwayat_penyakit, catatan) 
        VALUES('$id_pasien', '$id_pemeriksaan', '$tgl_pemeriksaan', '$berat_badan', '$tekanan_darah', '$gula_darah', '$riwayat_penyakit', '$catatan')";

			  $hasil = mysqli_query($conn, $query);        
        
		if ($hasil) {
			header("Location: riwayat.php"); 
		} else {
			// If there is an error, you can get the error message using mysqli_error
			echo "Data Gagal Ditambahkan. Error: " . mysqli_error($conn);
		}
	}
?>