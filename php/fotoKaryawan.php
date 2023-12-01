<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman | Gallery Foto</title>
    <!-- Favicons -->
    <link href="../assets/img/icon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        * {
            font-family: poppins, sans-serif;
        }

        body {
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1d3c45;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 38px;
        }

        .nav-links {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            background: #1d3c45;
            padding: 20px 15px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            justify-content: space-between;
        }

        .nav-links li {
            list-style: none;
            margin: 0 12px;
        }

        .nav-links li a {
            position: relative;
            color: #ffffff;
            font-size: 20px;
            font-weight: 500;
            padding: 6px 0;
            text-decoration: none;
        }

        .nav-links li a:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 0%;
            background: #34efdf;
            border-radius: 12px;
            transition: all 0.4s ease;
        }

        .nav-links li a:hover:before {
            width: 100%;
        }

        .nav-links li.center a:before {
            left: 50%;
            transform: translateX(-50%);
        }

        .nav-links li.upward a:before {
            width: 100%;
            bottom: -5px;
            opacity: 0;
        }

        .nav-links li.upward a:hover:before {
            bottom: 0px;
            opacity: 1;
        }

        .nav-links li.forward a:before {
            width: 100%;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease;
        }

        .nav-links li.forward a:hover:before {
            transform: scaleX(1);
            transform-origin: left;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .gallery-item {
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .gallery-item img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .gallery-item h1 {
            margin-bottom: 0px;
            margin-top: 0px;
        }

        .gallery-item p {
            margin-top: 10px;
        }

        /* CSS responsif untuk tampilan layar kecil */
        @media screen and (max-width: 768px) {
            .container {
                width: 100%;
                /* Mengurangi lebar kontainer pada layar kecil */
            }

            .nav-links {
                width: 100%;
                /* Lebar penuh pada layar kecil */
                justify-content: center;
                /* Pusatkan tautan pada layar kecil */
            }

            .gallery {
                grid-template-columns: repeat(1, 1fr);
                /* Satu kolom pada layar kecil */
            }

            .gallery-item {
                margin-bottom: 20px;
                /* Jarak antar item pada layar kecil */
            }
        }

        /* CSS untuk navigasi responsif */
        @media screen and (max-width: 768px) {
            .nav-links {
                flex-direction: column;
                /* Mengubah tata letak menjadi vertikal */
                text-align: center;
                /* Pusatkan tautan pada layar kecil */
                align-items: center;
                /* Pusatkan tautan secara horizontal pada layar kecil */
            }

            .nav-links li {
                margin: 10px 0;
                /* Atur jarak antara tautan pada layar kecil */
            }

            .nav-links li.center {
                order: 1;
                /* Mengubah urutan tautan "Tambah Lowongan" menjadi kedua */
            }

            .nav-links li.upward {
                order: 2;
                /* Mengubah urutan tautan "Lowongan" menjadi ketiga */
            }

            /* Mengatur tampilan tautan saat layar kecil */
            .nav-links li a {
                font-size: 18px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Document Karyawan</h1>
    </header>
    <div class="container">
        <ul class="nav-links" style="width: 50%; margin: 16px auto;"> <!-- Menambahkan gaya langsung di sini -->
            <li><a href="dataKaryawan.php">Data Karyawan</a></li>
            <li class="center"><a href="../html/lamanAdmin.html">Tambah Lowongan</a></li>
            <li class="upward"><a href="adminLowonganKerja.php">Lowongan</a></li>
            <!-- <li class="forward"><a href="#">Feedback</a></li> -->
        </ul>
    </div>
    <div class="gallery">
        <?php
        include 'koneksi.php';

        $sql = "SELECT id, cv, nama, passport, seaman_book, panama_or_liberia_ceo, visa, ijazah_endorsement_coc, cop, gmdss_endorsement, goc_oru, yellow_fever, vaccine FROM karyawan";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $cv = $row['cv'];
            $nama = $row['nama'];

            $passport = $row['passport'];
            $schengenPassport = $_POST['schengenPassport'];
            $passportExpiryDate = $_POST['passportExpiryDate'];

            $seaman_book = $row['seaman_book'];
            $schengenSeamanBook = $_POST['schengenSeamanBook'];
            $seamanBookExpiryDate = $_POST['seamanBookExpiryDate'];

            $panama_or_liberia_ceo = $row['panama_or_liberia_ceo'];
            $schengenPanama = $_POST['schengenPanama'];
            $panamaExpiryDate = $_POST['panamaExpiryDate'];

            $visa = $row['visa'];
            $schengenVisa = $_POST['schengenVisa'];
            $visaExpiryDate = $_POST['visaExpiryDate'];

            $ijazah_endorsement_coc = $row['ijazah_endorsement_coc'];
            $cop = $row['cop'];
            $gmdss_endorsement = $row['gmdss_endorsement'];
            $goc_oru = $row['goc_oru'];
            $yellow_fever = $row['yellow_fever'];
            $vaccine = $row['vaccine'];

            echo "<div class='gallery-item' id='photo-$id'>";
            if (!empty($cv)) {
                echo "<img src='../assets/img/documentKaryawan/$cv' alt='CV'>";
                echo "<h1 class='employee-name'>$nama</h1>";
                echo "<p>Document : CV</p>";
            }
            if (!empty($passport)) {
                echo "<img src='../assets/img/documentKaryawan/$passport' alt='Paspor'>";
                echo "<p>Document : Paspor</p>";
                echo "<p>schengen Passport : $schengenPassport</p>";
                echo "<p>passport ExpiryDate : $passportExpiryDate</p>";
            }
            if (!empty($seaman_book)) {
                echo "<img src='../assets/img/documentKaryawan/$seaman_book' alt='Seaman Book'>";
                echo "<p>Document : Seaman Book</p>";
                echo "<p>schengen SeamanBook : $schengenSeamanBook</p>";
                echo "<p>seamanBook ExpiryDate : $seamanBookExpiryDate</p>";
            }
            if (!empty($panama_or_liberia_ceo)) {
                echo "<img src='../assets/img/documentKaryawan/$panama_or_liberia_ceo' alt='Seaman Book'>";
                echo "<p>Document : Panama or liberia ceo</p>";
                echo "<p>schengen Panama : $schengenPanama</p>";
                echo "<p>panama ExpiryDate : $panamaExpiryDate</p>";
            }
            if (!empty($visa)) {
                echo "<img src='../assets/img/documentKaryawan/$visa' alt='Visa'>";
                echo "<p>Document : Visa</p>";
                echo "<p>schengen Visa : $schengenVisa</p>";
                echo "<p>visa ExpiryDate : $visaExpiryDate</p>";
            }
            if (!empty($ijazah_endorsement_coc)) {
                echo "<img src='../assets/img/documentKaryawan/$ijazah_endorsement_coc' alt='ijazah endorsement coc'>";
                echo "<p>Document : Ijazah endorsement coc</p>";
            }
            if (!empty($cop)) {
                echo "<img src='../assets/img/documentKaryawan/$cop' alt='cop'>";
                echo "<p>Document : COP</p>";
            }
            if (!empty($gmdss_endorsement)) {
                echo "<img src='../assets/img/documentKaryawan/$gmdss_endorsement' alt='gmdss endorsement'>";
                echo "<p>Document : GMDS Endorsement</p>";
            }
            if (!empty($goc_oru)) {
                echo "<img src='../assets/img/documentKaryawan/$goc_oru' alt='goc oru'>";
                echo "<p>Document : GOC Oru</p>";
            }
            if (!empty($yellow_fever)) {
                echo "<img src='../assets/img/documentKaryawan/$yellow_fever' alt='yellow fever'>";
                echo "<p>Document : Yellow Fever</p>";
            }
            if (!empty($vaccine)) {
                echo "<img src='../assets/img/documentKaryawan/$vaccine' alt='vaccine'>";
                echo "<p>Document : Vaccine</p>";
            }
            // Anda dapat melanjutkan dengan jenis foto lainnya sesuai kebutuhan Anda
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>