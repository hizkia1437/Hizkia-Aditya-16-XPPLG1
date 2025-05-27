<?php
$host = "localhost";  // sesuaikan kalau beda
$user = "root";       // sesuaikan
$password = "";       // sesuaikan
$dbname = "login_db"; // ganti sesuai db

// Buat koneksi
$mysqli = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
    `