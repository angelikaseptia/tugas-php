<?php 
$datasiswa = [
    ["Joni Susanto", "XII TKR 2", "Pemalang"] , ["Intan Ayu", "XII TB 1", "Brebes"] , ["Salma Karima", "XI rpl 3", "Batang"]
];
$y =1
?>
<!DOCTYPE html>
<head>
    <title>ch 4</title>
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
    <?php foreach ($datasiswa as $x): ?>
     <tr>
        <td><?= $y++ ?></td>
        <td><?= $x[0] ?></td>
        <td><?= $x[1] ?></td>
        <td><?= $x[2] ?></td>
     </tr> 
     <?php endforeach; ?>
        </table>  
</body>
</html>