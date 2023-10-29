<?php
include 'koneksi.php';

if (isset($_POST['idLowongan'])) {
    $idLowongan = $_POST['idLowongan'];

    $query = "DELETE FROM lowongan_kerja WHERE id = $idLowongan";

    if (mysqli_query($conn, $query)) {
        echo "Lowongan berhasil dihapus.";
    } else {
        echo "Gagal menghapus lowongan: " . mysqli_error($conn);
    }
} else {
    echo "ID lowongan tidak ditemukan.";
}
