<?php
    require "koneksi.php";

    $id_pemeriksaan = $_GET['id_pemeriksaan'];
    $result = mysqli_query($conn, "DELETE FROM riwayat_checkup WHERE id_pemeriksaan=$id_pemeriksaan");

    header("Location:riwayat.php");
?>