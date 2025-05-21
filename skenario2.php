<?php

$jam = date("18");

if ($jam >= 04 && $jam < 10){
    $HI = "Selamat pagi!";
}
else if ($jam >= 10 && $jam < 15){
    $HI = "Selamat siang!";
}
else if ($jam >= 15 && $jam < 18){
    $HI = "Selamat sore!";
}
else if ($jam >= 18 && $jam < 24){
    $HI = "Selamat malam!";
}
else if ($jam >= 24 && $jam < 04){
    $HI = "Dini Hari";
}
else {
    $HI = "Dunia ini hancur";
}

echo "sekarang adalah jam $jam:00 HIZZY:$HI"
?>
