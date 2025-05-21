<?php
$hari_list = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal_list = range(1, 31);
$bulan_list = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun_list = [2024, 2025, 2026];

$bulan_map = array(
    "Jan" => 1, "Feb" => 2, "Mar" => 3, "Apr" => 4, "Mei" => 5, "Jun" => 6,
    "Jul" => 7, "Ags" => 8, "Sep" => 9, "Okt" => 10, "Nov" => 11, "Des" => 12
);

// Nilai default
$default_day = "Senin";
$default_date = 10;
$default_month = "Mar";
$default_year = 2025;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_date = (int)$_POST["date"];
    $selected_month = $_POST["month"];
    $selected_year = (int)$_POST["year"];
    $selected_day_manual = $_POST["day"];

    $month_number = $bulan_map[$selected_month];

    if (checkdate($month_number, $selected_date, $selected_year)) {
        $tanggal_str = "$selected_year-$month_number-$selected_date";
        $day_index = date("w", strtotime($tanggal_str));
        $selected_day = $hari_list[$day_index];

        echo "<div class='result'><h3>Hasil Pilihan:</h3>";
        echo "<p><strong>Hari otomatis dari sistem: $selected_day</strong></p>";
        echo "<p><strong>Hari yang dipilih manual: $selected_day_manual</strong></p>";
        echo "<p><strong>$selected_date - $selected_month - $selected_year</strong></p></div>";
    } else {
        echo "<div class='error'><h3>Error: Tanggal tidak valid</h3></div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Tanggal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        select, input[type='submit'] {
            padding: 8px;
            margin: 5px;
            font-size: 16px;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: green;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Pilih Hari, Tanggal, Bulan, dan Tahun:</h3>
        <form method='post'>

            Hari: <select name='day'>
            <?php
                for ($i = 0; $i < count($hari_list); $i++) {
                    $selected = ($hari_list[$i] == $default_day) ? "selected" : "";
                    echo "<option value='{$hari_list[$i]}' $selected>{$hari_list[$i]}</option>";
                }
            ?>
            </select><br>

            Tanggal: <select name='date'>
            <?php
                foreach ($tanggal_list as $tanggal) {
                    $selected = ($tanggal == $default_date) ? "selected" : "";
                    echo "<option value='$tanggal' $selected>$tanggal</option>";
                }
            ?>
            </select><br>

            Bulan: <select name='month'>
            <?php
                $i = 0;
                while ($i < count($bulan_list)) {
                    $bulan = $bulan_list[$i];
                    $selected = ($bulan == $default_month) ? "selected" : "";
                    echo "<option value='$bulan' $selected>$bulan</option>";
                    $i++;
                }
            ?>
            </select><br>

            Tahun: <select name='year'>
            <?php
                $i = 0;
                do {
                    $tahun = $tahun_list[$i];
                    $selected = ($tahun == $default_year) ? "selected" : "";
                    echo "<option value='$tahun' $selected>$tahun</option>";
                    $i++;
                } while ($i < count($tahun_list));
            ?>
            </select><br><br>

            <input type='submit' value='Tampilkan'>
        </form>
    </div>
</body>
</html>