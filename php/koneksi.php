<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "job_pelaut_indonesia";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
