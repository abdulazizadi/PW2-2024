<?php

$nilai = 80;
$keterangan = "";

if($nilai >= 90) {
    $keterangan = "Bagus!";
} elseif($nilai > 70 || $nilai <= 90) {
    $keterangan = "Bagus Banget!";
} else {
    $keterangan = "Koplak!";
}

echo "<h1> $keterangan </h1>";