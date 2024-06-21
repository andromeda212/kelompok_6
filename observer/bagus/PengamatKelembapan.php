<?php

class PengamatKelembapan implements Pengamat {
    private $kelembapanPengamat;
    private $subjekCuaca;

    public function __construct(SubjekCuaca $subjekCuaca) {
        $this->subjekCuaca = $subjekCuaca;
        $this->subjekCuaca->daftarPengamat($this);
    }

    public function perbarui() {
        $this->kelembapanPengamat = $this->subjekCuaca->getKelembapan();
        $this->tampilkan();
    }

    public function tampilkan() {
        echo "Kelembapan Udara: " . $this->kelembapanPengamat . "%<br>";
    }
}
