<?php
$cars = array("Ferarry", "lamborghini", "audi");
$negara = ["Singapura","Indonesia","Jepang"];
$kota = array("Singaparna","Indramayu","Jepara");

// echo "Aku punya ". $cars[0] .",". $cars[1] .", dan ". $cars[2] .".";
// echo "<br>";
// var_dump($negara);
// echo "<br>";
// print_r($kota);

var_dump($kota);
$kota[] = "Bogor";
echo "<br>";
var_dump($kota);
$kota[3] = "Jayapura";
echo "<br>";
var_dump($kota);
?>