<?php
// Sertakan file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    // $lokasi = $_POST["lokasi"];
    $tanggal_publikasi = $_POST["tanggal_publikasi"];

    // Query untuk menyimpan lowongan kerja ke database
    $query = "INSERT INTO lowongan_kerja ( deskripsi, tanggal_publikasi) VALUES ('$deskripsi', '$tanggal_publikasi')";

    if (mysqli_query($conn, $query)) {
        // Tutup koneksi ke database
        mysqli_close($conn);

        // Redirect kembali ke halaman admin dengan parameter query string untuk menampilkan popup
        header("Location: ../html/lamanAdmin.html?popup=success");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . mysqli_error($conn);
    }

    // Tutup koneksi ke database (tidak perlu ditutup dua kali)
    mysqli_close($conn);
}
