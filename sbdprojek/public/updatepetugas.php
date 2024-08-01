
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
        <center><h2>Edit Petugas Lansia</h2></center>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <?php
                require "koneksi.php";
                    $id_petugas= $_GET["id_petugas"];
                    $hasil= mysqli_query($conn, "SELECT * FROM petugas_kesehatan WHERE id_petugas='$id_petugas'");
                    
                    while($data = mysqli_fetch_array($hasil)){
                        $id_petugas = $data['id_petugas'];
                        $nama = $data['nama'];
                        $spesialis= $data['spesialis'];                 
                        }
                
                ?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="id_petugas">ID Petugas</label>
                    <input type="text" class="form-control" name="id_petugas" id="id_petugas" value="<?php echo
                    $id_petugas; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo
                    $nama; ?>">
                </div>
                <div class="form-group">
                    <label for="spesialis">Spesialis</label>
                    <input type="text" class="form-control" name="spesialis" id="spesialis" value="<?php echo
                    $spesialis; ?>">
                </div>
                </label>
                </div>
                </div>

                <center> 
                <button type="button" name="batal" onclick="location.href='petugas.php'" class="btn btn-secondary mb-2">Batal</button>
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
        $nama = $_POST["nama"];
        $id_petugas = $_POST["id_petugas"];
        $spesialis = $_POST["spesialis"];
        
        $query = "UPDATE petugas_kesehatan SET nama='$nama', spesialis='$spesialis' WHERE id_petugas='$id_petugas'";
        $hasil = mysqli_query($conn, $query);

        if($hasil){
            header("Location: petugas.php");
        } else {
            echo "Data Gagal Diupdate";
        }
    }
?>
