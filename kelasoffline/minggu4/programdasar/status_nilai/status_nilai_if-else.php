<?php
    $nilai = 43;
    $valid = "";
    $grade = "";
    $status = "";
    if ($nilai < 0 || $nilai > 100) {
        $valid = "Nilai anda tidak valid <br>";
        echo "Nilai anda : " . $nilai . "<br>";
        echo $valid;
    } else {
        if ($nilai >= 90) {
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
        if ($nilai >= 75) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }
        echo "Nilai anda : " . $nilai . "<br>";
        echo $valid;
        echo "Grade : " . $grade . "<br>";
        echo "Status : " . $status . "<br>";
        $valid = "Nilai anda valid <br>";
    }
?>