<?php
// File: operator_logika.php

$umur = 20;
$aktif = true;
$nilai = 85;

echo "Umur >= 18 AND aktif: ";
var_dump($umur >= 18 && $aktif);

echo "<br>Nilai >= 80 OR tidak aktif: ";
var_dump($nilai >= 80 || !$aktif);

echo "<br>NOT aktif: ";
var_dump(!$aktif);
