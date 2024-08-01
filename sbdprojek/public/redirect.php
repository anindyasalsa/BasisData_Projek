<?php
// redirect.php

if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];

    // Lakukan logika pemrosesan pencarian sesuai dengan kebutuhan Anda
    // Misalnya, redirect ke halaman pasien.php jika input adalah "pasien"
    if ($searchValue == 'pasien') {
        header("Location: index.php");
        exit();
    }

    // Redirect ke halaman obat.php jika input adalah "obat"
    if ($searchValue == 'obat') {
        header("Location: obat.php");
        exit();
    }

    if ($searchValue == 'riwayat') {
        header("Location: riwayat.php");
        exit();
    }

    if ($searchValue == 'registrasi') {
        header("Location: regist.php");
        exit();
    }

    if ($searchValue == 'dashboard') {
        header("Location: indexcheck.php");
        exit();
    }

    if ($searchValue == 'petugas') {
        header("Location: petugas.php");
        exit();
    }

    // Tambahan logika untuk kasus lainnya jika diperlukan
}

// Jika tidak ada input atau input tidak sesuai, bisa tambahkan penanganan khusus
// Misalnya, kembali ke halaman formulir dengan pesan kesalahan
header("Location: form_page.php?error=invalid_input");
exit();
?>
