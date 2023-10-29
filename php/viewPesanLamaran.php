<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamaran Kerja</title>
    <!-- Favicons -->
    <link href="../assets/img/icon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <style>
        /* Reset default margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Google Fonts Import Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #1d3c45;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            width: 100%;
        }

        header h1 {
            font-size: 38px;
            margin-bottom: 2px;
        }

        .container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px 0;
            width: 80%;
            max-width: 600px;
        }

        .container h1 {
            margin-bottom: 5px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .pesan-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .pesan-item h1 {
            font-size: 24px;
            margin-bottom: 8px;
            color: #333;
        }

        .pesan-item p {
            font-size: 14px;
            color: #666;
        }

        /* Gaya tombol "Terima Lamaran" */
        button {
            background-color: #1d3c45;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
            margin-top: 15px;
        }

        button:hover {
            background-color: #147e8e;
        }


        /* Tambahkan gaya tambahan sesuai kebutuhan Anda */
    </style>
</head>

<body>
    <header>
        <h1>Pesan Lamaran Kerja</h1>
    </header>
    <div class="container">
        <?php
        include 'koneksi.php';

        // Query untuk mengambil data pesan lamaran kerja
        $query = "SELECT * FROM pesan_karyawan, lowongan_kerja";
        $result = mysqli_query($conn, $query);

        // Cek apakah ada pesan lamaran kerja
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Tampilkan data pesan lamaran kerja dalam div atau elemen lainnya
                echo "<div class='pesan-item' data-id='{$row['id']}'>";
                echo "<h1>{$row['nama_pengirim']}</h1>";
                echo "<p>Lowongan : {$row['judul']}</p>";
                echo "<p>Email : {$row['email_pengirim']}</p>";
                echo "<p>Pesan : {$row['pesan']}</p>";
                echo "<p>Tanggal Lamaran : {$row['waktu_pengiriman']}</p>";

                // Tombol "Terima Lamaran" dengan ID berdasarkan data pesan
                echo "<button onclick='terimaLamaran({$row['id']})'>Terima Lamaran</button>";

                echo "</div>";
            }
        } else {
            // Tampilkan pesan jika tidak ada pesan lamaran kerja
            echo "<p>Tidak ada pesan lamaran kerja yang ditemukan.</p>";
        }
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
        ?>

    </div>

    <script>
        function terimaLamaran(pesanId) {
            if (confirm("Anda yakin ingin menerima pesan lamaran ini?")) {
                // Kirim permintaan Ajax untuk menghapus data dari database
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "acceptPesanLamaran.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Hapus pesan lamaran dari tampilan setelah berhasil dihapus dari database
                        var pesanItem = document.querySelector('.pesan-item[data-id="' + pesanId + '"]');
                        if (pesanItem) {
                            pesanItem.remove();
                        }
                    }
                };
                xhr.send("pesan_id=" + pesanId);
            }
        }
    </script>

</body>

</html>