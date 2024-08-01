<?php
    $host = 'localhost';
    $username = 'root';
    $password = 'anin';
    $db_name = 'sbd_monitoring';
    $conn = new mysqli($host, $username, $password, $db_name);

    if(!$conn){
        die("Koneksi Gagal:".mysqli_connect_error());
        }
    ?>