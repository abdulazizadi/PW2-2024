<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$keahliam = $_POST['keahliam'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
?>

<h1>Terimakasih Sudah Mendaftar di IT Club Data Science </h1>
<h5>Nama Lengkap : <?php echo $nama ?></h5>
<h5>NIM : <?php echo $nim ?></h5>
<h5>Jenis Kelamin : <?php echo $jenisKelamin ?></h5>
<h5>Prodi : <?php echo $prodi ?></h5>
<h5>Domisili : <?php echo $domisili ?></h5>
<h5>Email : <?php echo $email ?></h5>
<h5>Keahlian : <?php echo $keahliam ?></h5>
