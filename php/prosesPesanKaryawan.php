<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pengirim = mysqli_real_escape_string($conn, $_POST["nama"]);
    $email_pengirim = mysqli_real_escape_string($conn, $_POST["email"]);
    $pesan = mysqli_real_escape_string($conn, $_POST["pesan"]);
    $lowongan_id = mysqli_real_escape_string($conn, $_POST["lowongan_id"]);

    $query = "INSERT INTO pesan_karyawan (nama_pengirim, email_pengirim, pesan, lowongan_id) VALUES ('$nama_pengirim', '$email_pengirim', '$pesan', '$lowongan_id')";

    if (mysqli_query($conn, $query)) {
        echo "Pesan Anda telah terkirim!";
    } else {
        echo "Maaf, terjadi kesalahan. Silakan coba lagi.";
    }
}
