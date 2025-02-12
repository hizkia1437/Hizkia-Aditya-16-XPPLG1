1 + 2 =
<br>
<?php
$angka_satu = 3.7;
$angka_dua = 5;
$penjumlahan = $angka_satu + $angka_dua;
$x = $angka_satu * $angka_dua;
$bagi = $angka_satu / $angka_dua;
$kurang = $angka_dua - $angka_satu;

echo $angka_satu . " + " . $angka_dua . " = " . $penjumlahan;
echo " <br> $angka_satu x $angka_dua = $x";
echo " <br> $angka_satu : $angka_dua = $bagi";
echo " <br> $angka_dua - $angka_satu = $kurang";
echo "<br> $angka_satu<sup>$angka_dua</sup> = "; //sup perpangkatan
echo pow($angka_satu,$angka_dua) ; //pow itu perpangkatan di PHP
echo "<br>";
echo pow(3,5);//angka_satu itu angka dasar,angka_dua itu eksponen ;
?>