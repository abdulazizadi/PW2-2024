<?php

// Deklarasi array multidimensi mahasiswa
$mahasiswa = [
  ["Aziz", "Teknik Informatika"],
  ["Azizah Simanjuntak", "Hukum Tata Negara"],
  ["Cinta Mayang Sari", "Akuntansi"],
  ["Aisyah", "Ilmu Komunikasi"]
];

// Cetak isi array menggunakan perulangan foreach

foreach ($mahasiswa as $mhs) {
  echo "Nama : " . $mhs[0] . "<br>";
  echo "Jurusan : " . $mhs[1] . "<br>";
  echo "<br>";
}

?>
