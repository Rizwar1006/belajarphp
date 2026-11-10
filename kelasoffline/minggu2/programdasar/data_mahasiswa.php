<?php
// File: data_mahasiswa.php

$nama = "Andi";
$nim = "23123456";
$prodi = "Teknik Informatika";
$umur = 20;
$ipk = 3.75;
$aktif = true;

echo "<h2>Data Mahasiswa</h2>";
echo "Nama: " . $nama . "<br>";
echo "NIM: " . $nim . "<br>";
echo "Program Studi: " . $prodi . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "IPK: " . $ipk . "<br>";
echo "Status: " . ($aktif ? "Aktif" : "Tidak Aktif");
