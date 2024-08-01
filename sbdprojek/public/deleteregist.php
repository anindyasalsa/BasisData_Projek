<?php
    require "koneksi.php";

    $id_registrasi = $_GET['id_registrasi'];
    $result = mysqli_query($conn, "DELETE FROM registrasi WHERE id_registrasi=$id_registrasi");

    header("Location:regist.php");
?>