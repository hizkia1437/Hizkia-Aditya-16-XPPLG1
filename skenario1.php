<?php

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

?>