<?php

$nilai = "95";

if($nilai > 89){
    $grade = "Sangat baik";
}else if($nilai > 79){
    $grade = "baik";
}else if($nilai > 69){
    $grade = "cukup";
}else if($nilai > 49){
    $grade = "kurang";
}else if($nilai < 50){
    $grade = "sangat kurang";
}
else{
    $nilai("kosong");
}
echo("jika nilai siswa adalah " .$nilai. " gradenya adalah " .$grade)
?>