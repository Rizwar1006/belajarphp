<?php
$nama = "Khairizwar Nazril Zulviazka";
$nilai = 82;

if ($nilai >= 85) {
    $grade = "Sangat Baik";
} elseif ($nilai >= 70) {
    $grade = "Baik";
} elseif ($nilai >= 60) {
    $grade = "Cukup";
} elseif ($nilai >= 50) {
    $grade = "Kurang";
} else {
    $grade = "Sangat Kurang";
}
echo "Nama:" . $nama . "<br>";
echo "Nilai: " . $nilai . "<br>";
echo "Predikat: " . $grade;
?>