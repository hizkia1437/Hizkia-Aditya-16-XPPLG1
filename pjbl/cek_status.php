<?php
// Set konfigurasi Midtrans (ganti dengan server key milikmu)
$serverKey = 'SB-Mid-server-3wVN-rJoaBjSy4Dpn_fLbBPE'; // Sandbox Server Key
$midtransUrl = 'https://api.sandbox.midtrans.com/v2/';

// Ambil order_id dari URL
if (!isset($_GET['order_id'])) {
    http_response_code(400);
    echo json_encode(['error' => 'order_id tidak ditemukan']);
    exit;
}

$orderId = $_GET['order_id'];

// Buat permintaan ke Midtrans API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $midtransUrl . $orderId . '/status');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Basic ' . base64_encode($serverKey . ':')
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpCode === 200) {
    echo $response;
} else {
    http_response_code($httpCode);
    echo json_encode(['error' => 'Gagal mengambil status transaksi']);
}

curl_close($ch);
