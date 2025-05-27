<?php
session_start();
require_once "db_connect.php";

// Ambil data dari form
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Siapkan SQL untuk cari user berdasarkan email
$sql = "SELECT id, username, email, password FROM users WHERE email = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Cek hasil
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Login sukses, simpan sesi dan redirect
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $user["id"];
        $_SESSION["username"] = $user["username"];

        header("Location: homepage.php");
        exit();
    }
}

// Kalau gagal, tetap redirect ke homepage (bisa kasih notif nanti kalau mau)
header("Location: homepage.php");
exit();
