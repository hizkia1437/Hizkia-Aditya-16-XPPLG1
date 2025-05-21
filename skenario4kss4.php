<?php
echo "<h3>Kasus 4</h3>";

$suasana_hati = ["galau", "bersemangat", "marah"];

$lagu_ambyar = [
    ["suasana" => "galau", "lagu" => "Mesin Waktu - Budi Doremi"],
    ["suasana" => "bersemangat", "lagu" => "Selamat Pagi - Ran"],
    ["suasana" => "marah", "lagu" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];

foreach ($lagu_ambyar as $item) {
    echo "Jika sedang " . $item["suasana"] . ", Ambyar mendengarkan lagu " . $item["lagu"] . ".<br>";
}
?>