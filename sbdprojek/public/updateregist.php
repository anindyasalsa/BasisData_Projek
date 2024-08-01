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
        <center><h2>Edit Registrasi Pasien Lansia </h2></center>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <?php
                require "koneksi.php";
                    $id_registrasi= $_GET["id_registrasi"];
                    $hasil= mysqli_query($conn, "SELECT * FROM registrasi WHERE id_registrasi='$id_registrasi'");
                    
                    while($data = mysqli_fetch_array($hasil)){
                        $id_registrasi = $data['id_registrasi'];
                        $id_pasien = $data['id_pasien'];
                        $id_petugas= $data['id_petugas'];
                        $tgl_temu= $data['tgl_temu'];
                        $waktu_temu= $data['waktu_temu'];
                        }
                
                ?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="id_registrasi">ID Registrasi</label>
                    <input type="text" class="form-control" name="id_registrasi" id="id_registrasi" value="<?php echo
                    $id_registrasi; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_pasien">ID Pasien</label>
                    <input type="text" class="form-control" name="id_pasien" id="id_pasien" value="<?php echo
                    $id_pasien; ?>"readonly>
                </div>
                <div class="form-group">
                    <label for="id_petugas">ID Petugas</label>
                    <input type="text" class="form-control" name="id_petugas" id="id_petugas" value="<?php echo
                    $id_petugas; ?>"readonly>
                </div>

                <div class="form-group">
                    <label for="tgl_temu">Tanggal Temu</label>
                    <input type="Date" class="form-control" name="tgl_temu" id="tgl_temu" value="<?php echo
                    $tgl_temu; ?>">
                </div>

                <div class="form-group">
                    <label for="waktu_temu">Waktu Temu</label>
                    <input type="text" class="form-control" name="waktu_temu" id="waktu_temu" value="<?php echo
                    $waktu_temu; ?>">
                    </div>
                </label>
                </div>
                </div>

                <center> 
                <button type="button" name="batal" onclick="location.href='regist.php'" class="btn btn-secondary mb-2">Batal</button>
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
        $id_registrasi = $_POST["id_registrasi"];
        $id_pasien = $_POST["id_pasien"];
        $id_petugas = $_POST["id_petugas"];
        $tgl_temu = $_POST["tgl_temu"];
        $waktu_temu = $_POST["waktu_temu"];

        $query = "UPDATE registrasi SET id_pasien='$id_pasien', id_petugas='$id_petugas', tgl_temu='$tgl_temu', waktu_temu='$waktu_temu' WHERE id_registrasi='$id_registrasi'";
        $hasil = mysqli_query($conn, $query);

        if($hasil){
            header("Location: regist.php");
        } else {
            echo "Data Gagal Diupdate";
        }
    }
?>
