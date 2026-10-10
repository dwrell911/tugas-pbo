<?php

require_once 'Mahasiswa.php';
require_once 'Produk.php';

echo "=== DATA MAHASISWA ===\n\n";

$mahasiswa1 = new Mahasiswa(
    "231011001",
    "Andi Pratama",
    "Pendidikan Teknologi Informasi",
    3.72
);

$mahasiswa2 = new Mahasiswa(
    "231011002",
    "Bunga Lestari",
    "Pendidikan Teknologi Informasi",
    3.28
);

$mahasiswa3 = new Mahasiswa(
    "231011003",
    "Cahya Nugraha",
    "Pendidikan Teknologi Informasi",
    2.91
);

echo $mahasiswa1->info() . "\n\n";
echo $mahasiswa2->info() . "\n\n";
echo $mahasiswa3->info() . "\n\n";

echo "=== DATA PRODUK ===\n\n";

$produk1 = new Produk("Mouse", 75000, 10);
$produk2 = new Produk("Keyboard", 150000, 5);
$produk3 = new Produk("Monitor", 1200000, 3);

$daftarProduk = [$produk1, $produk2, $produk3];

foreach ($daftarProduk as $produk) {
    echo "Nama: " . $produk->getNama() . "\n";
    echo "Harga: Rp"
        . number_format($produk->getHarga(), 0, ',', '.') . "\n";
    echo "Stok: " . $produk->getStok() . "\n";
    echo "Total Nilai: Rp"
        . number_format($produk->totalNilai(), 0, ',', '.') . "\n\n";
}