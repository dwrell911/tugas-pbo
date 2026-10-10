<?php

class Mahasiswa
{
    private string $nim;
    private string $nama;
    private string $prodi;
    private float $ipk;

    public function __construct(
        string $nim,
        string $nama,
        string $prodi,
        float $ipk
    ) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function info(): string
    {
        return "NIM: {$this->nim}\n"
            . "Nama: {$this->nama}\n"
            . "Prodi: {$this->prodi}\n"
            . "IPK: {$this->ipk}\n"
            . "Predikat: " . $this->predikat();
    }

    public function predikat(): string
    {
        if ($this->ipk >= 3.50) {
            return "Cumlaude";
        } elseif ($this->ipk >= 3.00) {
            return "Sangat Memuaskan";
        } elseif ($this->ipk >= 2.50) {
            return "Memuaskan";
        }

        return "Cukup";
    }
}
