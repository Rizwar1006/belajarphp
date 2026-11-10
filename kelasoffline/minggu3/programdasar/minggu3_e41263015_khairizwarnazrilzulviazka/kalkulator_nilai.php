<?php 
   
   $tugas = 85;
    $uts = 75;
    $uas = 90;

    $nilai_akhir = ($tugas * 0.30) +
                   ($uts * 0.30) + 
                   ($uas * 0.40);
    
    echo "Nilai Tugas: " . $tugas . "<br>";
    echo "Nilai UTS: " . $uts . "<br>"; 
    echo "Nilai UAS: " . $uas . "<br>";
    echo "Nilai Akhir: " . $nilai_akhir;

    echo "<br>Nilai Akhir >= 75 : ";
    var_dump($nilai_akhir >= 75);
?>