<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman | Lowongan Kerja</title>
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

        header {
            background-color: #1d3c45;
            color: #fff;
            text-align: center;
            padding: 20px;
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

        .lowongan-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .lowongan-item h2 {
            font-size: 18px;
            margin-bottom: 8px;
            color: #333;
        }

        .lowongan-item p {
            font-size: 14px;
            color: #666;
        }

        .lowongan-item .hubungi-admin {
            background-color: #1d3c45;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .lowongan-item .hubungi-admin:hover {
            background-color: #147e8e;
        }

        /* CSS untuk modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 600px;
            position: relative;
            text-align: left;
            /* Ubah tata letak teks ke kiri */
        }

        .modal-content h1 {
            margin-bottom: 10px;
            font-size: 30px;
        }

        .modal-content hr {
            border: 1px solid #ccc;
            /* Warna dan lebar garis */
            margin: 10px 0;
            /* Atur jarak atas dan bawah */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }

        /* Formulir dalam modal */
        #contactForm {
            display: flex;
            flex-direction: column;
            gap: 0px;
            /* Jarak antara elemen dalam kolom direduksi menjadi 0px */
        }

        #contactForm label {
            margin-bottom: 4px;
            /* Jarak bawah yang lebih kecil */
        }

        #contactForm input[type="text"],
        #contactForm input[type="email"],
        #contactForm textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: transparent;
            /* Menambahkan properti ini untuk menghapuskan warna latar belakang */
        }

        #contactForm textarea {
            height: 100px;
            margin-bottom: 6px;
            /* Jarak bawah yang lebih kecil */
        }

        #contactForm button {
            background-color: #1d3c45;
            color: #fff;
            padding: 20px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s;
            margin-top: 10px;
            /* Menambahkan jarak ke atas */
        }

        #contactForm button:hover {
            background-color: #147e8e;
        }
    </style>
</head>

<body>
    <header>
        <h1>Lowongan Kerja</h1>
    </header>
    <div class="container">
        <?php
        include 'koneksi.php';

        // Query untuk mengambil data lowongan pekerjaan
        $query = "SELECT * FROM lowongan_kerja";
        $result = mysqli_query($conn, $query);

        // Inisialisasi nomor
        $nomor = 1;

        // Cek apakah ada data lowongan pekerjaan
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Tampilkan data lowongan pekerjaan dalam div .lowongan-item
                echo "<div class='lowongan-item'>";
                // echo "<h1>{$row['judul']}</h1>";
                echo "<p>Lowongan Kerja Ke : " . $nomor . "</p>"; // Menampilkan nomor
                echo "<p>{$row['deskripsi']}</p>";
                // echo "<p>Lokasi : {$row['lokasi']}</p>";
                echo "<p>Tanggal Publikasi : {$row['tanggal_publikasi']}</p>";

                // Tombol "Hubungi Admin" dengan tautan ke email atau kontak admin
                echo "<button class='hubungi-admin' style='background-color: #1d3c45; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; margin-top: 10px; transition: background-color 0.3s;'><a style='color: #fff; text-decoration: none;' href='../html/formulirKaryawan.html'>Lamar Lowongan</a></button>";
                // echo "<button class='hubungi-admin' onclick='hubungiAdmin(\"{$row['judul']}\", {$row['id']})' data-id='{$row['id']}'>Lamar Lowongan</button>";
                echo "</div>";
                // Tambahkan 1 ke nomor
                $nomor++;
            }
        } else {
            // Tampilkan pesan jika tidak ada lowongan pekerjaan
            echo "<p>Maaf, tidak ada lowongan pekerjaan yang tersedia saat ini.</p>";
        }
        ?>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h1 id="modalTitle">Lamar Lowongan</h1>
            <hr>
            <form action="prosesPesanKaryawan.php" method="POST" id="contactForm">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Enter Your Name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required><br><br>

                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="4" required></textarea><br><br>

                <!-- Input tersembunyi untuk menyimpan ID lowongan yang dipilih -->
                <input type="hidden" id="lowongan_id" name="lowongan_id">

                <button type="button" class="hubungi-admin" onclick="kirimPesan()">Kirim Pesan</button>
            </form>
        </div>
    </div>
    <script>
        function showModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        function hubungiAdmin(judulLowongan, idLowongan) {
            showModal();

            // Mengatur judul modal
            document.getElementById("modalTitle").textContent = "Lamar Lowongan: " + judulLowongan;

            // Menambahkan ID lowongan ke form untuk dikirim ke server
            document.getElementById("lowongan_id").value = idLowongan;
        }

        function kirimPesan() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var pesan = document.getElementById("pesan").value;

            if (nama.trim() === "" || email.trim() === "" || pesan.trim() === "") {
                alert("Harap isi semua field!");
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "prosesPesanKaryawan.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = xhr.responseText;
                    alert(response);
                    closeModal();
                }
            };
            xhr.send("nama=" + nama + "&email=" + email + "&pesan=" + pesan + "&lowongan_id=" + document.getElementById("lowongan_id").value);
        }
    </script>
</body>

</html>