<?php

require_once 'Subjek.php';
require_once 'PengamatCuaca.php';

class SubjekCuaca implements Subjek {
    private $daftarPengamat = [];
    private $keadaanCuaca;

    public function daftarPengamat(Pengamat $pengamat) {
        $this->daftarPengamat[] = $pengamat;
    }

    public function hapusPengamat(Pengamat $pengamat) {
        $index = array_search($pengamat, $this->daftarPengamat);
        if ($index !== false) {
            unset($this->daftarPengamat[$index]);
        }
    }

    public function beriNotifikasi() {
        foreach ($this->daftarPengamat as $pengamat) {
            $pengamat->perbarui();
        }
    }

    public function setKeadaan($keadaan) {
        $this->keadaanCuaca = $keadaan;
        $this->beriNotifikasi();
    }

    public function getKeadaan() {
        return $this->keadaanCuaca;
    }
}
