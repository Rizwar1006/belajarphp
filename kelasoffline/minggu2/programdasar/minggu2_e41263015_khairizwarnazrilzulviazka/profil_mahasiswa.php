<?php
    
    $nama = "Khairizwar Nazril Zulviazka";
    $nim = "E41263015";
    $jurusan = "Teknologi Informasi";
    $prodi = "Teknik Informatika";
    $umur = 18;
    $ipk = 3.89;
    $status = true;

    echo "
    <br><div>Hai, $nama. <br>
    NIM $nim <br>
    Jurusan $jurusan <br>
    Prodi $prodi <br><br><br>

    Data Anda Tahun 2026 <br>
    Umur : $umur Tahun <br>
    IPK : $ipk <br>
    Status Aktif: ".($status?"Aktif":"Tidak Aktif")."<br><br>
    ";

    echo "Simulasi Var_dump<br>"; 
    var_dump($nama);
    echo "<br>";
    var_dump($nim);
    echo "<br>";
    var_dump($jurusan);
    echo "<br>";
    var_dump($prodi);
    echo "<br>";
    var_dump($umur);
    echo "<br>";
    var_dump($ipk);
    echo "<br>";
    var_dump($status);

    ;

?>