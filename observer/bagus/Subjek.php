<?php

interface Subjek {
    public function daftarPengamat(Pengamat $pengamat);
    public function hapusPengamat(Pengamat $pengamat);
    public function beriNotifikasi();
}
