<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Harian Andi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrnoAoPat7-T6MmfHla7f8WDxwBo-osNV_RA&s);
            
        }
        .container {
            max-width: 500px;
            margin: auto;
            background:white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0);
            
        }
        h2 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #e3e3e3;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .php{
            text-align: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background:gray ;
            border-radius:5px;
            padding: 10px;
            margin: 5px;
            color: #e3e3e3;
            
            
        }
        footer{
            text-align: center;
            margin-top:5px;
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Jadwal Harian Andi</h2>
        <ul>
            <li>04:00 - 04:15 → Bangun</li>
            <li>04:15 - 04:30 → Sholat Subuh</li>
            <li>04:30 - 05:30 → Mandi dan persiapan serta sarapan</li>
            <li>05:30 - 06:00 → Berangkat ke sekolah</li>
            <li>06:00 - 07:00 → Mengobrol dengan teman di sekolah</li>
            <li>07:00 - 15:30 → Sekolah</li>
            <li>15:30 - 15:45 → Pulang ke rumah</li>
            <li>15:45 - 16:00 → Mandi</li>
            <li>16:00 - 16:30 → Ngaji</li>
            <li>16:30 - 17:00 → Hafalan dialog</li>
            <li>17:00 - 17:15 → Beli bumbu</li>
            <li>17:15 - 17:45 → Chatting dengan Raya</li>
            <li>17:45 - 18:05 → Ke masjid dan sholat</li>
            <li>18:05 - 18:45 → Makan malam</li>
            <li>18:45 - 19:15 → Sholat Isya</li>
            <li>19:15 - 21:15 → Belajar</li>
            <li>21:15 - 21:45 → Berbincang dengan keluarga</li>
            <li>21:45 - 04.00 → Tidur</li>
        </ul>
<div class="php">
<?php

$waktu=date("00.15");

$sekolah=true;
$tugas=false;
$hafalan=true;
$belanja=true;
$chatting=true;
$hiburan=true;

// bangun
if ($waktu ==date("04.00") && $waktu <date ("04.15")) {
    echo $waktu," - Bangun";
}
else {
// bangun end
}
// subuh
if ($waktu >=date("04.15") && $waktu <date("04.30")) {
    echo $waktu," - Solat subuh";
}
else {
// subuh end
}
// siap siap
if ($waktu >=date( "04.30") && $waktu <=date("05.30")) {
    echo $waktu," - Mandi dan persiapan serta sarapan";
}
else {
// siap siap end
}
// berangkat
if ($waktu >=date("05.30")&& $waktu <= ("06.00")) {
    echo $waktu," - Berangkat Sekolah";
}
else {
// berangkat end
}
// ngobrol
if ($waktu >=date("06.00") && $waktu < date("07.00")) {
    echo $waktu," - Ngobrol dengan teman sekolah";
}
else {
// ngobrol end
}
// pelajaran
if ($waktu >=date("07.00") && $waktu < date("15.30")) {
   if ($sekolah) {
    echo $waktu," - Pelajaran"; 
   }
   else {
    echo $waktu," - Boloss";
   }
}
// sekolah end
// pulang
if ($waktu >=date("15.30") && $waktu < date("15.45")) {
    echo $waktu," - Pulang Sekolah";
}
else {
// pulang end
}
// mandi
if ($waktu >=date("15.45") && $waktu < date("16.00")) {
echo $waktu," - Mandi";
}
else {
// mandi end
}
// ngaji
if ($waktu >=date("16.00") && $waktu < date("16.30")) {
    echo $waktu," - Ngaji";
}
else {
// ngaji end
}
// hafalan
if ($waktu >=date("16.30") && $waktu < date("17.00")) {
    if ($hafalan) {
        echo $waktu," - Hafalan Dialog";
    }
    else{
        echo $waktu," - Main";
    }
}    
// h end
// bumbu
if ($waktu >=date("17.00") && $waktu < date("17.15")) {
    if ($belanja) {
        echo $waktu," - Beli Bumbu";
    }
    else {
        echo $waktu," - Dirumah Aja";
    }
}
// bumbu end
// chat
if ($waktu >=date("17.15") && $waktu < date("17.45")) {
    if ($chatting) {
        echo $waktu," - Chating Raya";
    }
    else {
        echo $waktu," - Raya Selingkuh";
    }
} 
//chat end
// solat
if($waktu >=date("17.45") && $waktu < date("18.05")) {
    echo $waktu," - Solat Magrib";}
    else{
    // solat end
    }
// makan
if ($waktu >=date("18.05") &&   $waktu < date("18.45")) {
    echo $waktu,"- Makan Bersama Keluarga";}
    else {
    // makan end
    } 
//isya
if ($waktu >=date("18.45") && $waktu < date("19.15")) {
    echo $waktu," - Solat Isya";
}
else {
    // isya end
}
// belajar
if ($waktu >=date("19.15") && $waktu < date("21.15")) {
    if ($tugas){
    echo $waktu," - Buat Tugas";}
    elseif ($waktu >=date("19.15") && $waktu < date("19.45")) {
    echo $waktu," - Ngobrol With Family";}
    else {
    // belajar end
    }
}
//ngobrol primer
if ($waktu >=date("19.45") && $waktu < date("21.45")) {
    if ($hiburan){
        echo $waktu," - Main Game";}
    elseif ($waktu >=date("21.15") && $waktu < date("21.45")) {
        echo $waktu," - Ngobrol With Family";}
    else {
    // end
    }
}
//    nyiapin jadwal
if ($waktu >=date("21.45") && $waktu < date("22.00")) {
    echo $waktu," - Nyiapin Jadwal dan Cuci Muka";
}
else {
// nyiapin jadwal end
}
// turu
if ($waktu >=date("22.00") && $waktu <= date("23.59")) {
    echo $waktu," - Turu";}
elseif ($waktu >=date("00.00") && $waktu <= date("03.59")){
    echo $waktu," - Mimpi Indah";}
else {
// turu end
}
?>
</div>
<footer>Salman &copy; Hizzkia</footer>
</div>
</body>
</html>
