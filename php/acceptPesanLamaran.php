<?php
include 'koneksi.php';

if (isset($_POST['pesan_id'])) {
    $pesanId = $_POST['pesan_id'];

    // Query untuk menghapus pesan lamaran dari database dengan prepared statement
    $query = "DELETE FROM pesan_karyawan WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $pesanId);
        if (mysqli_stmt_execute($stmt)) {
            echo "Pesan lamaran telah diterima dan dihapus.";
        } else {
            echo "Gagal menghapus pesan lamaran.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Gagal menyiapkan statement.";
    }
} else {
    echo "Permintaan tidak valid.";
}
