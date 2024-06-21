<?php

require_once 'Subjek.php';
require_once 'Pengamat.php';
require_once 'SubjekCuaca.php';
require_once 'PengamatCuaca.php';

// Inisialisasi subjek dan pengamat
$subjekCuaca = new SubjekCuaca();
$pengamatCuaca = new PengamatCuaca($subjekCuaca);


// Mengubah keadaan cuaca dan kelembapan
$subjekCuaca->setKeadaan("Cerah, 30°C");

echo "<br>";

$subjekCuaca->setKeadaan("Berawan, 25°C");
echo "<br>";

$subjekCuaca->setKeadaan("Hujan, 22°C");
echo "<br>";
