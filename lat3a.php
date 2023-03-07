<?php 
function identitas($nama, $kelas, $alamat){
    return"Nama saya $nama, saya kelas $kelas,dan alamat saya di $alamat";
}
?>
<!DOCTYPE html>
<head>
    <title>ch 3a</title>
</head>
<body>
    <h1><?= identitas("Anggelika", "XI RPL1", "Batang");?></h1>
</body>
</html>