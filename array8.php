
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan pengulangan</title>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            background-color: skyblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform:rotate(360deg);
            border-radius: 50%
        }
        body {
            width: 400px;
        }
    </style>
</head>
<body>
    
<?php
$angka = [1,2,3,4,5,6,7,8,9];
?>
<?php foreach ($angka as $f) :?>
   <div class= kotak><?php echo $f; ?></div>
<?php endforeach; ?>

</body>
</html>