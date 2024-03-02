<?php
$grade= "F";
$keterangan = "";

switch ($grade) {
        case "A":
        $keterangan = "Nice!";
        break;
    case "B":
        $keterangan = "Great!";
        break;
    case "C":
        $keterangan = "Cool!";
        break;
    case "D":
        $keterangan = "Noob";
        break;
    default:
        $keterangan = "Nice Try:(";
        break;

    }

echo "<h1>$keterangan</h1>";

