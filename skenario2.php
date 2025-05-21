<?php
/*
$nilai = 70;

if($nilai <= 79 && $nilai >=70)
{
    echo "Grade: C = Calon bos engineer";
}
else if($nilai <= 100 && $nilai >=90){
    echo "Grade: A = Anjay";
}
else if($nilai <= 89 && $nilai >=80){
    echo "Grade: B = Baik";
}
else if ($nilai <=69 && $nilai > 0){
    echo "Grade D = Dongo";
}
else {
    echo "Nilai wajib diatas 0";
}
*/ 

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