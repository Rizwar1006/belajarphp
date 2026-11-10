<?php

function hitungNilaiAkhir ($tugas, $uts, $uas) {
    return $tugas*3/10 + $uts*3/10 + $uas*4/10;
}
function grade ($nilaiAkhir) {
    if ($nilaiAkhir >= 90) {
        return "A";
    } elseif ($nilaiAkhir >= 80) {
        return "B";
    } elseif ($nilaiAkhir >= 70) {
        return "C";
    } elseif ($nilaiAkhir >= 60) {
        return "D";
    } elseif ($nilaiAkhir < 60) {
        return "E";
    } else {
        return "Tidak valid";
    }
}
function status ($nilaiAkhir) {
    if ($nilaiAkhir >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}
function hasil ($nilaiAkhir, $grade, $status, $tugas, $uts, $uas, $nama, $nim) {

    $nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);
    $grade = grade($nilaiAkhir);
    $status = status($nilaiAkhir);

    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Nilai Tugas: " . $tugas . "<br>";
    echo "Nilai UTS: " . $uts . "<br>";
    echo "Nilai UAS: " . $uas . "<br>";
    echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
    echo "Grade: " . $grade . "<br>";
    echo "Status: " . $status . "<br><br>";
}

    $mahasiswa = [
        [
            "nama" => "Korupsi Hilang Dunia Tenang",
            "nim" => "E00000000",
            "tugas" => 50,
            "uts" => 50,
            "uas" => 100
        ],
        [
            "nama" => "Khairizwar Nazril Zulviazka",
            "nim" => "E41263015",
            "tugas" => 99,
            "uts" => 99,
            "uas" => 99
        ],
        [
            "nama" => "Supartno De Popo",
            "nim" => "E42263015",
            "tugas" => 87,
            "uts" => 86,
            "uas" => 85
        ]
    ];

    foreach ($mahasiswa as $x => $mhs) {

        $nilaiAkhir = hitungNilaiAkhir($mhs['tugas'], $mhs['uts'], $mhs['uas']);
        $grade = grade($nilaiAkhir);
        $status = status($nilaiAkhir);
        hasil ($nilaiAkhir, $grade, $status, $mhs['tugas'], $mhs['uts'], $mhs['uas'], $mhs['nama'], $mhs['nim']);

    }






?>