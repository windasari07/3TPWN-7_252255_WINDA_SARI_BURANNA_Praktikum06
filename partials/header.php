<?php
// $judulHalaman dan $hasil diisi oleh index.php sebelum berkas ini dimuat.
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judulHalaman ?> &middot; <?= NAMA_APLIKASI ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <a class="brand" href="index.php"><?= NAMA_APLIKASI ?></a>
        <nav class="menu">
            <a href="index.php">Katalog</a>
            <a href="index.php#tambah">Tambah Buku</a>
        </nav>
    </header>

    <?php // Tugas modifikasi 3: jumlah data tampil di header semua halaman ?>
    <p class="info-jumlah">
        Menampilkan <?= count($hasil) ?> dari <?= count($buku) ?> judul.
    </p>

    <div class="halaman">
