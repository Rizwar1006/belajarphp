<?php
$buah = ["Apel", "Jeruk", "Mangga"];

echo "Data awal:<br>";

foreach ($buah as $nama) {
    echo $nama . "<br>";
}

$buah[] = "Pisang";
$buah[] = "Semangka";
$buah[] = "Stroberi";

echo "<br>Data setelah ditambahkan:<br>";

foreach ($buah as $nama) {
    echo $nama . "<br>";
}
?>