<?php
// snap_token.php

require_once 'vendor/autoload.php'; // Pastikan Midtrans SDK sudah di-install via Composer

\Midtrans\Config::$serverKey = 'SB-Mid-server-3wVN-rJoaBjSy4Dpn_fLbBPE';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

// Ambil data dari frontend
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

// Pastikan data lengkap
if (!isset($data['nama']) || !isset($data['total'])) {
    http_response_code(400);
    echo json_encode(["error" => "Data tidak lengkap"]);
    exit;
}

$orderId = 'ORDER-' . time(); // Buat ID unik
$transaction_details = [
    'order_id' => $orderId,
    'gross_amount' => (int)$data['total'],
];

// Item minimal (karena kamu mengirim daftar produk sebagai string)
$item_details = [
    [
        'id' => 'item1',
        'price' => (int)$data['total'],
        'quantity' => 1,
        'name' => 'Pesanan: ' . substr($data['produk'], 0, 50)
    ]
];

// Optional customer detail
$customer_details = [
    'first_name' => $data['nama'],
    'phone' => $data['no_hp'],
];

// Kirim ke Midtrans
$transaction = [
    'transaction_details' => $transaction_details,
    'item_details' => $item_details,
    'customer_details' => $customer_details,
];

try {
    $snapToken = \Midtrans\Snap::getSnapToken($transaction);
    echo json_encode(['token' => $snapToken]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
