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
        <center><h2>Edit Obat pemeriksaan Lansia </h2></center>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <?php
                require "koneksi.php";
                    $id_obat= $_GET["id_obat"];
                    $hasil= mysqli_query($conn, "SELECT * FROM obat WHERE id_obat='$id_obat'");
                    
                    while($data = mysqli_fetch_array($hasil)){
                        $id_obat = $data['id_obat'];
                        $id_pemeriksaan = $data['id_pemeriksaan'];
                        $nama_obat= $data['nama_obat'];
                        $deskripsi= $data['deskripsi'];
                        $dosis= $data['dosis'];
                        $instruksi_penggunaan= $data['instruksi_penggunaan'];                        
                        }
                
                ?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="id_obat">ID Obat</label>
                    <input type="text" class="form-control" name="id_obat" id="id_obat" value="<?php echo
                    $id_obat; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_pemeriksaan">ID Pemeriksaan</label>
                    <input type="text" class="form-control" name="id_pemeriksaan" id="id_pemeriksaan" value="<?php echo
                    $id_pemeriksaan; ?>"readonly>
                </div>
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <input type="text" class="form-control" name="nama_obat" id="nama_obat" value="<?php echo
                    $nama_obat; ?>">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?php echo
                    $deskripsi; ?>">
                </div>

                <div class="form-group">
                    <label for="dosis">Dosis</label>
                    <input type="text" class="form-control" name="dosis" id="dosis" value="<?php echo
                    $dosis; ?>">
                    </div>

                <div class="form-group">
                    <label for="instruksi_penggunaan">Instruksi Penggunaan</label>
                    <input type="text" class="form-control" name="instruksi_penggunaan" id="instruksi_penggunaan" value="<?php echo
                    $instruksi_penggunaan; ?>">
                    </div>


                </label>
                </div>
                </div>

                <center> 
                <button type="button" name="batal" onclick="location.href='obat.php'" class="btn btn-secondary mb-2">Batal</button>
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
        $id_pemeriksaan = $_POST["id_pemeriksaan"];
        $id_obat = $_POST["id_obat"];
        $nama_obat = $_POST["nama_obat"];
        $deskripsi = $_POST["deskripsi"];
        $dosis = $_POST["dosis"];
        $instruksi_penggunaan = $_POST["instruksi_penggunaan"];

        $query = "UPDATE obat SET id_pemeriksaan='$id_pemeriksaan', nama_obat='$nama_obat', deskripsi='$deskripsi', dosis='$dosis', instruksi_penggunaan='$instruksi_penggunaan' WHERE id_obat='$id_obat'";
        $hasil = mysqli_query($conn, $query);

        if($hasil){
            header("Location: obat.php");
        } else {
            echo "Data Gagal Diupdate";
        }
    }
?>
