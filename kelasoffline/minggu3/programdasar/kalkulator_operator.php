<?php
// File: kalkulator_operator.php

$a = 10;
$b = 5;

echo "<h2>Kalkulator Operator</h2>";
echo "A = $a<br>";
echo "B = $b<br><br>";

echo "Penjumlahan: " . ($a + $b) . "<br>";
echo "Pengurangan: " . ($a - $b) . "<br>";
echo "Perkalian: " . ($a * $b) . "<br>";
echo "Pembagian: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

echo "<br>Apakah A lebih besar dari B? ";
var_dump($a > $b);
