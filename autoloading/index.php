<?php 

require_once 'App/init.php';

$produk1 = new Komik("Programmer Man", "Syahidan", "Stefanus", 70000, 100);
$produk2 = new Game("Juara", "Guten", "ESTD", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new coba();
