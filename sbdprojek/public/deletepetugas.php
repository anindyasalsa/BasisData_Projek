<?php
    require "koneksi.php";

    $id_petugas = $_GET['id_petugas'];
    $result = mysqli_query($conn, "DELETE FROM petugas_kesehatan WHERE id_petugas=$id_petugas");

    header("Location:petugas.php");
?>