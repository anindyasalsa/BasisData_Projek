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
        <center><h2>Edit Pasien Lansia </h2></center>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <?php
                require "koneksi.php";
                    $id_pasien= $_GET["id_pasien"];
                    $hasil= mysqli_query($conn, "SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
                    
                    while($data = mysqli_fetch_array($hasil)){
                        $id_pasien = $data['id_pasien'];
                        $nama= $data['nama'];
                        $tgl_lahir= $data['tgl_lahir'];
                        $jenis_kelamin= $data['jenis_kelamin'];
                        $no_telp= $data['no_telp'];
                        $desa= $data['desa'];
                        $RT= $data['RT'];
                        $RW= $data['RW'];
                    }
                
                ?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="id_pasien">id_pasien</label>
                    <input type="text" class="form-control" name="id_pasien" id="id_pasien" value="<?php echo
                    $id_pasien; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo
                    $nama; ?>">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo
                    $tgl_lahir; ?>">
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo
                    $jenis_kelamin; ?>">
                </div>

                <div class="form-group">
                    <label for="no_telp">No.Telp</label>
                    <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo
                    $no_telp; ?>">
                </div>

                <div class="form-group">
                    <label for="desa">Desa</label>
                    <input type="text" class="form-control" name="desa" id="desa" value="<?php echo
                    $desa; ?>">
                </div>

                <div class="form-group">
                    <label for="RT">RT</label>
                    <input type="text" class="form-control" name="RT" id="RT" value="<?php echo
                    $RT; ?>">
                </div>

                <div class="form-group">
                    <label for="RW">RW</label>
                    <input type="text" class="form-control" name="RW" id="RW" value="<?php echo
                    $RW; ?>">
                    </div>
                </label>
                </div>
                </div>

                <center> 
                <button type="button" name="batal" onclick="location.href='index.php'" class="btn btn-secondary mb-2">Batal</button>
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
        $nama = $_POST["nama"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $no_telp = $_POST["no_telp"];
        $desa = $_POST["desa"];
        $RT = $_POST["RT"];
        $RW = $_POST["RW"];

        
        $query = "UPDATE pasien SET nama='$nama', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', desa='$desa', RT='$RT', RW='$RW' WHERE id_pasien='$id_pasien'";
        $hasil = mysqli_query($conn, $query);
        if($hasil){
            header("Location: index.php");
        } else {
            echo "Data Gagal Diupdate";
        }
    }
?>