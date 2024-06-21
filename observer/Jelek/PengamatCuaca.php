<?php

require_once 'Pengamat.php';
require_once 'SubjekCuaca.php';

class PengamatCuaca implements Pengamat {
    private $keadaanPengamat;
    private $subjekCuaca;

    public function __construct(SubjekCuaca $subjekCuaca) {
        $this->subjekCuaca = $subjekCuaca;
        $this->subjekCuaca->daftarPengamat($this);
    }

    public function perbarui() {
        $this->keadaanPengamat = $this->subjekCuaca->getKeadaan();
        $this->tampilkan();
    }

    public function tampilkan() {
        echo "Keadaan Cuaca: " . $this->keadaanPengamat . "\n";
    }
}
