<?php
//membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$myArray = ["Bayu", 18, true];

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";


echo $hari[2];
echo "<br>";
echo $myArray[0];
echo "<hr>";


$hari[] = "Kamis";
$hari[] = "Jumat";
$bulan[] = "April";
print_r($hari);
echo "<br>";
print_r($bulan);
