<?php
    require "koneksi.php";

    $id_pasien = $_GET['id_pasien'];
    $result = mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien=$id_pasien");

    header("Location:index.php");
?>