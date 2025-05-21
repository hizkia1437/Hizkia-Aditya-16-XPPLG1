<?php
    date_default_timezone_set("Asia/Jakarta"); // Set zona waktu
    $current_time = date(format: "15:35");

    function getActivity($time) {
        if ($time >= "04:00" && $time < "04:15") {
            return "Bangun";
        } elseif ($time >= "04:15" && $time < "04:30") {
            return "Sholat Subuh";
        } elseif ($time >= "04:30" && $time < "05:30") {
            return "Mandi dan persiapan serta sarapan";
        } elseif ($time >= "05:30" && $time < "06:00") {
            return "Berangkat ke sekolah";
        } elseif ($time >= "06:00" && $time < "07:00") {
            return "Mengobrol dengan teman di sekolah";
        } elseif ($time >= "07:00" && $time < "15:30") {
            return "Sekolah";
        } elseif ($time >= "15:30" && $time < "15:45") {
            return "Pulang ke rumah";
        } elseif ($time >= "15:45" && $time < "16:00") {
            return "Mandi";
        } elseif ($time >= "16:00" && $time < "16:30") {
            return "Ngaji";
        } elseif ($time >= "16:30" && $time < "17:00") {
            return "Hafalan dialog";
        } elseif ($time >= "17:00" && $time < "17:15") {
            return "Beli bumbu";
        } elseif ($time >= "17:15" && $time < "17:45") {
            return "Chatting dengan Raya";
        } elseif ($time >= "17:45" && $time < "18:05") {
            return "Ke masjid dan sholat";
        } elseif ($time >= "18:05" && $time < "18:45") {
            return "Makan malam";
        } elseif ($time >= "18:45" && $time < "19:15") {
            return "Sholat Isya";
        } elseif ($time >= "19:15" && $time < "21:15") {
            return "Belajar";
        } elseif ($time >= "21:15" && $time < "21:45") {
            return "Berbincang dengan keluarga";
        } else {
            return "Tidur";
        }
    }
?>
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
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Jadwal Harian Andi</h2>
        <p>Waktu Sekarang: <?php echo $current_time; ?></p>
        <p>Aktivitas: <?php echo getActivity($current_time); ?></p>
    </div>
    <div class="container2">
        <style>
            body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container2 {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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

        </style>
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
    </div>

</body>
</html>
