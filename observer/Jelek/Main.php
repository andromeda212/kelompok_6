<?php

require_once 'Subjek.php';
require_once 'Pengamat.php';
require_once 'SubjekCuaca.php';
require_once 'PengamatCuaca.php';

// Inisialisasi subjek dan pengamat
$subjekCuaca = new SubjekCuaca();
$pengamat1 = new PengamatCuaca($subjekCuaca);

// Mengubah keadaan cuaca
$subjekCuaca->setKeadaan("Cerah, 30°C,<br>");
$subjekCuaca->setKeadaan("Berawan, 25°C<br>");
$subjekCuaca->setKeadaan("Hujan, 22°C<br>");
