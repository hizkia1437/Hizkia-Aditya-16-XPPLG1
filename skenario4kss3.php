<?php 
echo "<h3>Kasus 3</h3>";

// Mawar yang dimiliki Sholeh
$mawar_dimiliki = [];
for ($mawar = 21; $mawar >= 10; $mawar--) {
    $mawar_dimiliki[] = $mawar;
}
echo "Mawar yang dimiliki Sholeh: " . implode(", ", $mawar_dimiliki) . "<br>";
echo "Jumlah Mawar yang dimiliki Sholeh: " . count($mawar_dimiliki) . "<br><br>";

// Mawar yang akan diberikan ke ibunya
$mawar_diberikan = [];
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    $mawar_diberikan[] = $mawar;
}
echo "Mawar yang diberikan ke ibunya: " . implode(", ", $mawar_diberikan) . "<br>";
echo "Jumlah Mawar yang diberikan ke ibunya: " . count($mawar_diberikan) . "<br><br>";
?>
