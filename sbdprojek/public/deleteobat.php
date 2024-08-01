<?php
    require "koneksi.php";

    $id_obat = $_GET['id_obat'];
    $result = mysqli_query($conn, "DELETE FROM obat WHERE id_obat=$id_obat");

    header("Location:obat.php");
?>