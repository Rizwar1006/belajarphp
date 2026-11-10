<?php
    $kehadiran = 80;
    $nilai_tugas = 70;
    $boleh_ujian = $kehadiran >= 75 && $nilai_tugas >= 60;
    var_dump($boleh_ujian);
    echo "<br>";
    $kehadiran = 70;
    $nilai_tugas = 80;
    $boleh_ujian = $kehadiran >= 75 && $nilai_tugas >= 60;
    var_dump($boleh_ujian);
    echo "<br>";
    $kehadiran = 90;
    $nilai_tugas = 50;
    $boleh_ujian = $kehadiran >= 75 && $nilai_tugas >= 60;
    var_dump($boleh_ujian);
    echo "<br>";
    $kehadiran = 60;
    $nilai_tugas = 40;
    $boleh_ujian = $kehadiran >= 75 && $nilai_tugas >= 60;
    var_dump($boleh_ujian);
    echo "<br>";
?>