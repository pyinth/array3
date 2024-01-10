<?php
$barangToko = [["Buku Tulis","ATK0001","RP.10.000","100"],
["Bolpen Standard","ATK0002","RP.2.500","50"],
["Penghapus","ATK0003","RP.2.000","30"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toko</title>
</head>
<body>
<h1>Daftart Barang Toko</h1>

<?php foreach ($barangToko as $bt) : ?>
<ul>
    <li><?=$bt[0]; ?></li>
    <li><?=$bt[1]; ?></li>
    <li><?=$bt[2]; ?></li>
</ul>

<?php endforeach; ?>
</body>
</html>