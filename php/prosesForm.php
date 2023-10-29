<?php
// Koneksi ke database MySQL
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan password database Anda
$database = "job_pelaut_indonesia"; // Ganti dengan nama database Anda

$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Tangkap data dari formulir
$nama = $_POST['nama'];

// Query SQL untuk memeriksa apakah nama sudah ada dalam database
$checkQuery = "SELECT nama FROM karyawan WHERE nama = '$nama'";
$result = $koneksi->query($checkQuery);

if ($result->num_rows > 0) {
    // Nama sudah ada dalam database, beri pesan kesalahan
    $response = array('status' => 'error', 'message' => 'Nama sudah ada dalam database. Tidak bisa menyimpan data duplikat.');
} else {
    // Nama belum ada dalam database, lanjutkan dengan penyimpanan data
    $umur = $_POST['umur'];
    $posisi = $_POST['posisi'];
    $jenis_kapal = $_POST['jenis_kapal'];
    $class = $_POST['class'];
    $last_vessel_type = $_POST['last_vessel_type'];
    $grt = $_POST['grt'];
    $trading_area = $_POST['trading_area'];
    $salary = $_POST['salary'];
    $available_in_jakarta = $_POST['available'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $email_address = $_POST['email'];
    $skype_id = $_POST['skype_id'];
    $cv = $_FILES['cv']['name'];
    $cv_temp = $_FILES['cv']['tmp_name'];
    $passport = $_FILES['passport']['name'];
    $passport_temp = $_FILES['passport']['tmp_name'];
    $schengenPassport = $_POST['schengenPassport'];
    $passportExpiryDate = $_POST['passportExpiryDate'];
    $seaman_book = $_FILES['seaman_book']['name'];
    $seaman_book_temp = $_FILES['seaman_book']['tmp_name'];
    $schengenSeamanBook = $_POST['schengenSeamanBook'];
    $seamanBookExpiryDate = $_POST['seamanBookExpiryDate'];
    $panama_or_liberia_ceo = $_FILES['panama_or_liberia_ceo']['name'];
    $panama_or_liberia_ceo_temp = $_FILES['panama_or_liberia_ceo']['tmp_name'];
    $schengenPanama = $_POST['schengenPanama'];
    $panamaExpiryDate = $_POST['panamaExpiryDate'];
    $visa = $_FILES['visa']['name'];
    $visa_temp = $_FILES['visa']['tmp_name'];
    $schengenVisa = $_POST['schengenVisa'];
    $visaExpiryDate = $_POST['visaExpiryDate'];
    $ijazah_endorsement_coc = $_FILES['ijazah_endorsement_coc']['name'];
    $ijazah_endorsement_coc_temp = $_FILES['ijazah_endorsement_coc']['tmp_name'];
    $cop = $_FILES['cop']['name'];
    $cop_temp = $_FILES['cop']['tmp_name'];
    $gmdss_endorsement = $_FILES['gmdss_endorsement']['name'];
    $gmdss_endorsement_temp = $_FILES['gmdss_endorsement']['tmp_name'];
    $goc_oru = $_FILES['goc_oru']['name'];
    $goc_oru_temp = $_FILES['goc_oru']['tmp_name'];
    $yellow_fever = $_FILES['yellow_fever']['name'];
    $yellow_fever_temp = $_FILES['yellow_fever']['tmp_name'];
    $vaccine = $_FILES['vaccine']['name'];
    $vaccine_temp = $_FILES['vaccine']['tmp_name'];
    $last_contract = $_POST['last_contract'];
    $last_appraisal = $_POST['last_appraisal'];
    $tgl_pembuatan = $_POST['tgl_pembuatan'];

    // Pindahkan file yang diunggah ke direktori yang sesuai (contoh: 'uploads/')
    $upload_directory = '../assets/img/documentKaryawan/';
    move_uploaded_file($cv_temp, $upload_directory . $cv);
    move_uploaded_file($passport_temp, $upload_directory . $passport);
    move_uploaded_file($seaman_book_temp, $upload_directory . $seaman_book);
    move_uploaded_file($panama_or_liberia_ceo_temp, $upload_directory . $panama_or_liberia_ceo);
    move_uploaded_file($visa_temp, $upload_directory . $visa);
    move_uploaded_file($ijazah_endorsement_coc_temp, $upload_directory . $ijazah_endorsement_coc);
    move_uploaded_file($cop_temp, $upload_directory . $cop);
    move_uploaded_file($gmdss_endorsement_temp, $upload_directory . $gmdss_endorsement);
    move_uploaded_file($goc_oru_temp, $upload_directory . $goc_oru);
    move_uploaded_file($yellow_fever_temp, $upload_directory . $yellow_fever);
    move_uploaded_file($vaccine_temp, $upload_directory . $vaccine);

    // Query SQL untuk menyimpan data ke tabel
    $sql = "INSERT INTO karyawan (nama, umur, posisi, jenis_kapal, class, last_vessel_type, grt, trading_area, salary, available_in_jakarta, nomor_telepon, email_address, skype_id, cv, passport, schengenPassport, passportExpiryDate, seaman_book, schengenSeamanBook, seamanBookExpiryDate, panama_or_liberia_ceo, schengenPanama, panamaExpiryDate, visa, schengenVisa, visaExpiryDate, ijazah_endorsement_coc, cop, gmdss_endorsement, goc_oru, yellow_fever, vaccine, last_contract, last_appraisal, tgl_pembuatan) VALUES ('$nama', '$umur', '$posisi', '$jenis_kapal', '$class', '$last_vessel_type', '$grt', '$trading_area', '$salary', '$available_in_jakarta', '$nomor_telepon', '$email_address', '$skype_id', '$cv', '$passport', '$schengenPassport', '$passportExpiryDate', '$seaman_book', '$schengenSeamanBook', '$seamanBookExpiryDate', '$panama_or_liberia_ceo', '$schengenPanama', '$panamaExpiryDate', '$visa', '$schengenVisa', '$visaExpiryDate', '$ijazah_endorsement_coc', '$cop', '$gmdss_endorsement', '$goc_oru', '$yellow_fever', '$vaccine', '$last_contract', '$last_appraisal', '$tgl_pembuatan')";

    if ($koneksi->query($sql) === true) {
        $response = array(
            'status' => 'success', 'message' => 'Data berhasil disimpan.'
        );
    } else {
        $response = array('status' => 'error', 'message' => 'Error: ' . $koneksi->error);
    }
}

// Tutup koneksi ke database
$koneksi->close();

header('Content-Type: application/json');

// Mengembalikan respons dalam format JSON
echo json_encode($response);
