<?php

/**
 * Program sederhana pendefinisian class dan pemanggilan class.
 **/
class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }
    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }
    public function tampilWarna()
    {
        echo "Warna mobilnya : " . $this->warna;
    }
}
// membuat objek mobil
$mobil_pertama = new Mobil();
$mobil_kedua = new Mobil();

// memanggil objek
echo "<h2>Mobil pertama</h2>";
echo $mobil_pertama->tampilWarna();

echo "<h2>Mobil pertama ganti warna</h2>";
echo $mobil_pertama->gantiWarna("Merah");
echo $mobil_pertama->tampilWarna();

echo "<h2>Mobil Kedua</h2>";
echo $mobil_kedua->gantiWarna("Hijau");
echo $mobil_kedua->tampilWarna();
