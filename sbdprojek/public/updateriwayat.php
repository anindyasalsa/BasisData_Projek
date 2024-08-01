<!DOCTYPE html>
<html>

<head>
    <title>Praktikum Antar Muka Pengguna</title>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <center><h2>Edit Riwayat Check Up Pasien Lansia </h2></center>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <?php
                require "koneksi.php";
                    $id_pemeriksaan= $_GET["id_pemeriksaan"];
                    $hasil= mysqli_query($conn, "SELECT * FROM riwayat_checkup WHERE id_pemeriksaan='$id_pemeriksaan'");
                    
                    while($data = mysqli_fetch_array($hasil)){
                        $id_pemeriksaan = $data['id_pemeriksaan'];
                        $id_pasien = $data['id_pasien'];
                        $tgl_pemeriksaan= $data['tgl_pemeriksaan'];
                        $berat_badan= $data['berat_badan'];
                        $tekanan_darah= $data['tekanan_darah'];
                        $gula_darah= $data['gula_darah'];
                        $riwayat_penyakit= $data['riwayat_penyakit'];
                        $catatan= $data['catatan'];
                    }
                
                ?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="id_pemeriksaan">id_pemeriksaan</label>
                    <input type="text" class="form-control" name="id_pemeriksaan" id="id_pemeriksaan" value="<?php echo
                    $id_pemeriksaan; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_pasien">ID Pasien</label>
                    <input type="text" class="form-control" name="id_pasien" id="id_pasien" value="<?php echo
                    $id_pasien; ?>"readonly>
                </div>
                <div class="form-group">
                    <label for="tgl_pemeriksaan">Tanggal Pemeriksaan</label>
                    <input type="date" class="form-control" name="tgl_pemeriksaan" id="tgl_pemeriksaan" value="<?php echo
                    $tgl_pemeriksaan; ?>">
                </div>

                <div class="form-group">
                    <label for="berat_badan">Berat Badan</label>
                    <input type="text" class="form-control" name="berat_badan" id="berat_badan" value="<?php echo
                    $berat_badan; ?>">
                </div>

                <div class="form-group">
                    <label for="tekanan_darah">Tekanan Darah</label>
                    <input type="text" class="form-control" name="tekanan_darah" id="tekanan_darah" value="<?php echo
                    $tekanan_darah; ?>">
                </div>

                <div class="form-group">
                    <label for="gula_darah">Gula Darah</label>
                    <input type="text" class="form-control" name="gula_darah" id="gula_darah" value="<?php echo
                    $gula_darah; ?>">
                </div>

                <div class="form-group">
                    <label for="riwayat_penyakit">Riwayat Penyakit</label>
                    <input type="text" class="form-control" name="riwayat_penyakit" id="riwayat_penyakit" value="<?php echo
                    $riwayat_penyakit; ?>">
                </div>

                <div class="form-group">
                    <label for="catatan">Keluhan/Catatan</label>
                    <input type="text" class="form-control" name="catatan" id="catatan" value="<?php echo
                    $catatan; ?>">
                    </div>
                </label>
                </div>
                </div>

                <center> 
                <button type="button" name="batal" onclick="location.href='riwayat.php'" class="btn btn-secondary mb-2">Batal</button>
                <button type="submit" name="update" class="btn btn-warning mb-2 float-
                right">Perbarui</button></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['update'])) {
        $id_pasien = $_POST["id_pasien"];
        $id_pemeriksaan = $_POST["id_pemeriksaan"];
        $tgl_pemeriksaan = $_POST["tgl_pemeriksaan"];
        $berat_badan = $_POST["berat_badan"];
        $tekanan_darah = $_POST["tekanan_darah"];
        $gula_darah = $_POST["gula_darah"];
        $riwayat_penyakit = $_POST["riwayat_penyakit"];
        $catatan = $_POST["catatan"];

        
        $query = "UPDATE riwayat_checkup SET tgl_pemeriksaan='$tgl_pemeriksaan', berat_badan='$berat_badan', tekanan_darah='$tekanan_darah', gula_darah='$gula_darah', riwayat_penyakit='$riwayat_penyakit', catatan='$catatan' WHERE id_pemeriksaan='$id_pemeriksaan'";
        $hasil = mysqli_query($conn, $query);
        if($hasil){
            header("Location: riwayat.php");
        } else {
            echo "Data Gagal Diupdate";
        }
    }
?>