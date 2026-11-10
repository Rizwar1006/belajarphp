<?php
// File: tipe_data.php

$nama = "Budi";
$umur = 20;
$ipk = 3.75;
$aktif = true;

echo "<h3>Nilai Variabel</h3>";
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . "<br>";
echo "IPK: " . $ipk . "<br>";
echo "Aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>";

echo "<h3>Tipe Data</h3>";
var_dump($nama);
echo "<br>";
var_dump($umur);
echo "<br>";
var_dump($ipk);
echo "<br>";
var_dump($aktif);
