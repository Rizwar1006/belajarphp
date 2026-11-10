<?php

    $mahasiswa = [
        [
            "nama" => "Korupsi Hilang Dunia Tenang",
            "nim" => "E00000000",
            "tugas" => 50,
            "uts" => 50,
            "uas" => 100,
            "na"
        ],
        [
            "nama" => "Khairizwar Nazril Zulviazka",
            "nim" => "E41263015",
            "tugas" => 99,
            "uts" => 99,
            "uas" => 99,
            "na"
        ],
        [
            "nama" => "Supartno De Popo",
            "nim" => "E42263015",
            "tugas" => 87,
            "uts" => 86,
            "uas" => 85,
            "na"
        ],
        [
            "nama" => "Kibop Bapop",
            "nim" => "E42566786",
            "tugas" => 100,
            "uts" => 100,
            "uas" => 100,
            "na"
        ],
        [
            "nama" => "Haji Parnomo",
            "nim" => "E43674323",
            "tugas" => 87,
            "uts" => 96,
            "uas" => 56,
            "na"
        ]
    ];

    $jumlahmahasiswa = count($mahasiswa);

    foreach ($mahasiswa as $data) {
        echo $data['nama'] . " - " . $data["nim"] . "<br>";
        echo "nilai tugas anda : " . $data['tugas'] . "<br>";
        echo "nilai uts anda : " . $data['uts'] . "<br>";
        echo "nilai uas anda : " . $data['uas'] . "<br><br>"; 
    }

    foreach ($mahasiswa as $x => $data) {
        echo $data['nama'] . " - " . $data["nim"] . "<br>Memiliki nilai akhir: " ;
        $mahasiswa[$x]["na"] = ($data['uas']*(4/10)) + ($data['uts']*(3/10)) + ($data['tugas']*(3/10));
        echo $mahasiswa[$x]["na"];
        echo "<br><br>";
    }

        echo "<b>Total Jumlah Mahasiswa: " . $jumlahmahasiswa . "</b><br><br>";
        $tertinggi = $mahasiswa[0];

    foreach ($mahasiswa as $mhs) {
        if ($mhs['na'] > $tertinggi['na']) {
            $tertinggi = $mhs;
        }
    }

    echo "<b>Mahasiswa dengan Nilai Akhir Tertinggi:</b><br>";
    echo "Nama: " . $tertinggi['nama'] . "<br>";
    echo "NIM: " . $tertinggi['nim'] . "<br>";
    echo "Nilai Akhir: " . $tertinggi['na'] . "<br><br>";

?>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr bgcolor="#f2f2f2">
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $index => $mhs) : ?>
                <tr>
                    <td align="center"><?= $index + 1; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td align="center"><?= $mhs['tugas']; ?></td>
                    <td align="center"><?= $mhs['uts']; ?></td>
                    <td align="center"><?= $mhs['uas']; ?></td>
                    <td align="center"><b><?= $mhs['na']; ?></b></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
