<?php
$angka = 4;

echo "BAGIAN A<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $angka . " x " . $i . " = " . ($angka * $i) . "<br>";
}

echo "<br>BAGIAN B 1<br>";
$x = 1;
while ($x <= 10) {
    $a = ($x % 2 == 0) ? "Genap" : "Ganjil";
    echo $x . " - " . $a . "<br>";
    $x++;
}

echo "<br>BAGIAN B 2<br>";
$y = 10;
do {
    $b = ($y % 2 == 0) ? "Genap" : "Ganjil";
    echo $y . " - " . $b . "<br>";
    $y--;
} while ($y >= 1);
?>