<?php

class kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    function __construct($nama,$warna,$tempatOperasi)
    {
        $this->nama= $nama;
        $this->nama= $warna;
        $this->nama= $tempatOperasi = $tempatOperasi;
    }
}

$kendaraan = new kendaraan("Mobil", "Merah", "Darat");
echo $kendaraan->nama;
echo $kendaraan->warna;
echo $kendaraan->tempatOperasi;

?>
