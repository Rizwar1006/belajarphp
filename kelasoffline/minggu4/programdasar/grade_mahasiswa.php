<?php
// File: grade_mahasiswa.php

$nilai = 85;

if ($nilai < 0 || $nilai > 100) {
    echo "Nilai tidak valid";
} elseif ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

if ($nilai >= 0 && $nilai <= 100) {
    echo "Nilai: " . $nilai . "<br>";
    echo "Grade: " . $grade;
}
