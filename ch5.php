<?php 
$datasiswa = [
    [
        "Nama" => "Joni Susanto",
        "Kelas" => "XII TKR 2",
        "Alamat" => "Pemalang",
    ],
    [
        "Nama" => "Intan Ayu",
        "Kelas" => "XII TB 1",
        "Alamat" => "Brebes",
    ],
    [
        "Nama" => "Salma Karima",
        "Kelas" => "XI RPL 3",
        "Alamat" => "Batang",
    ],
];
$x = 1;
?>
<!DOCTYPE html>
<head>
    <title>ch 5</title>
</head>
<body>
    <table>
        <table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Alamat</td>
    </tr>
    <?php foreach ($datasiswa as $y): ?>
     <tr>
        <td><?= $x++ ?></td>
        <td><?= $y["Nama"] ?></td>
        <td><?= $y["Kelas"] ?></td>
        <td><?= $y["Alamat"] ?></td>
     </tr> 
     <?php endforeach; ?>
        </table>  
</body>
</html> 