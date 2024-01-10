<?php
$mahasiswa = ["Ristanto Wira Putra","27364289003","Sistem Informasi","Email"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ristanto</title>
</head>
<body>
<h1>Daftart Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mhs) :?>
        <li><?= $mhs ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>