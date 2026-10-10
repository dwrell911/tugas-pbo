<?php

class Produk
{
    private string $nama;
    private int $harga;
    private int $stok;

    public function __construct(
        string $nama,
        int $harga,
        int $stok
    ) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getHarga(): int
    {
        return $this->harga;
    }

    public function getStok(): int
    {
        return $this->stok;
    }

    public function totalNilai(): int
    {
        return $this->harga * $this->stok;
    }
}
