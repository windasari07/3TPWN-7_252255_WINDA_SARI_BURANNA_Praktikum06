<?php
const NAMA_APLIKASI = "Perpus Mini";

function labelStok(int $stok): string
{
    if ($stok === 0) {
        return "Habis";
    }

    if ($stok <= 2) {
        return "Menipis";
    }

    return "Tersedia";
}

// Tugas modifikasi 1: 1980 menjadi "1980-an"
function labelTahun(int $tahun): string
{
    return $tahun . "-an";
}

// Tugas modifikasi 2: cari pada judul DAN penulis
function cariBuku(array $daftar, string $kata): array
{
    $kata = trim($kata);

    if ($kata === "") {
        return $daftar;
    }

    return array_filter($daftar, function (array $b) use ($kata): bool {
        $kunci = strtolower($kata);
        $judul = strtolower($b["judul"]);
        $penulis = strtolower($b["penulis"]);

        return str_contains($judul, $kunci) || str_contains($penulis, $kunci);
    });
}

function tanggalServer(): string
{
    date_default_timezone_set("Asia/Makassar");

    return date("d-m-Y");
}
?>
