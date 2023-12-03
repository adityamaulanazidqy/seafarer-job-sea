<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman | Data Karyawan</title>
    <!-- Favicons -->
    <link href="../assets/img/icon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <script>
        function exportToExcel(tableId, filename = '') {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableId);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'export_excel_data.xls';

            // Create download link element
            downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }
        }
    </script>
    <style>
        /* Reset default margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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
            font-size: 36px;
            margin-bottom: 10px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            background: #1d3c45;
            padding: 20px 15px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            justify-content: space-between;
            width: 100%;
            max-width: 800px;
            /* Sesuaikan lebar maksimum sesuai kebutuhan Anda */
            margin-bottom: 20px;
            overflow-x: auto;
            /* Tambahkan overflow-x agar bisa di-scroll jika terlalu banyak menu */
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

        .container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px 0;
            width: 100%;
            max-width: 800px;
            /* Sesuaikan lebar maksimum sesuai kebutuhan Anda */
            overflow-x: auto;
            /* Tambahkan overflow-x agar bisa di-scroll jika konten terlalu lebar */
        }

        .container h1 {
            font-size: 38px;
            border-bottom: 2px solid #1d3c45;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th,
        table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #1d3c45;
            color: #fff;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 768px) {
            .nav-links {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links li {
                margin: 10px 0;
            }

            .container {
                padding: 10px;
            }

            table {
                font-size: 14px;
            }

            table th,
            table td {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Data Karyawan</h1>
    </header>
    <div class="container">
        <ul class="nav-links">
            <li><a href="dataKaryawan.php">Data Karyawan</a></li>
            <li class="center"><a href="../html/lamanAdmin.html">Tambah Lowongan</a></li>
            <li class="upward"><a href="adminLowonganKerja.php">Lowongan</a></li>
            <!-- <li class="forward"><a href="#">Feedback</a></li> -->
        </ul>
        <button onclick="exportToExcel('data-table', 'DataKaryawan')">Export to Excel</button>
        <h1>Daftar Karyawan</h1>
        <table id="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Rank</th>
                    <th>Class</th>
                    <th>Last Vessel Type</th>
                    <th>GRT</th>
                    <th>Trading Area</th>
                    <th>Salary</th>
                    <th>Available In Jakarta</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Skype ID</th>
                    <th>schengen Passport</th>
                    <th>passport ExpiryDate</th>
                    <th>schengen SeamanBook</th>
                    <th>seamanBook ExpiryDate</th>
                    <th>schengen Panama</th>
                    <th>panama ExpiryDate</th>
                    <th>schengen Visa</th>
                    <th>visa ExpiryDate</th>
                    <!-- Tambahkan kolom lainnya sesuai dengan kebutuhan -->
                </tr>
            </thead>
            <tbody>
                <?php
                // Sisipkan file koneksi.php yang berisi informasi koneksi ke database
                include 'koneksi.php';

                // Query untuk mengambil data karyawan dari tabel 'karyawan'
                $sql = "SELECT * FROM karyawan";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["umur"] . "</td>";
                        echo "<td>" . $row["posisi"] . "</td>";
                        echo "<td>" . $row["class"] . "</td>";
                        echo "<td>" . $row["last_vessel_type"] . "</td>";
                        echo "<td>" . $row["grt"] . "</td>";
                        echo "<td>" . $row["trading_area"] . "</td>";
                        echo "<td>" . $row["salary"] . "</td>";
                        echo "<td>" . $row["available_in_jakarta"] . "</td>";
                        echo "<td>" . $row["nomor_telepon"] . "</td>";
                        echo "<td>" . $row["email_address"] . "</td>";
                        echo "<td>" . $row["skype_id"] . "</td>";
                        echo "<td>" . $row["schengenPassport"] . "</td>";
                        echo "<td>" . $row["passportExpiryDate"] . "</td>";
                        echo "<td>" . $row["schengenSeamanBook"] . "</td>";
                        echo "<td>" . $row["seamanBookExpiryDate"] . "</td>";
                        echo "<td>" . $row["schengenPanama"] . "</td>";
                        echo "<td>" . $row["panamaExpiryDate"] . "</td>";
                        echo "<td>" . $row["schengenVisa"] . "</td>";
                        echo "<td>" . $row["visaExpiryDate"] . "</td>";
                        // Tambahkan kolom lainnya sesuai dengan kebutuhan
                        echo "</tr>";
                    }
                } else {
                    echo "Tidak ada data karyawan.";
                }

                // Tutup koneksi ke database
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>