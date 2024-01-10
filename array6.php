<?php
$angka = [23,56,8,90,34,1,43,987];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan pengulangan</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: green;
            text-align: center;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    
<?php foreach ($angka as $key) {?>
   <div><?php echo $key; ?></div>
<?php } ?>

</body>
</html>