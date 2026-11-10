<?php

    $mahasiswa = [
        [
            "nama" => "Juki",
            "nim" => "E12345678",
            "tugas" => 67,
            "uts" => 67,
            "uas" => 97,
            "na"
        ],
        [
            "nama" => "Dhylan Beckham Marchlaevich",
            "nim" => "E41262771",
            "tugas" => 96,
            "uts" => 97,
            "uas" => 98,
            "na"
        ],
        [
            "nama" => "Lukas",
            "nim" => "E42365789",
            "tugas" => 86,
            "uts" => 89,
            "uas" => 88,
            "na"
        ],
        [
            "nama" => "Hanzo",
            "nim" => "E42509674",
            "tugas" => 100,
            "uts" => 100,
            "uas" => 100,
            "na"
        ],
        [
            "nama" => "Paquito",
            "nim" => "E47420475",
            "tugas" => 89,
            "uts" => 98,
            "uas" => 55,
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

    
