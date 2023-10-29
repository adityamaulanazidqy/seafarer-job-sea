<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "seafarer_job_sea";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
