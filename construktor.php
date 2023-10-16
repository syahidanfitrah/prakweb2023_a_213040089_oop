<?php 

class Produk {
  public $judul = "Judul", 
         $penulis = "Penulis",
         $penerbit = "Penerbit",
         $harga = 0;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = 
      "penerbit", $harga = 0 ) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
  }

  public function getLable() {
      return "$this->penulis, $this->penerbit"; 
  }


}

$produk1 = new Produk("Programmer Man", "Syahidan", "Stefanus", 70000);
$produk2 = new Produk("Juara", "Guten", "ESTD", 250000);
$produk3 = new Produk("Dargon Ball");

echo "Komik : " . $produk3->getLable();
echo "<br>";
echo "Game : " . $produk4->getLable();
echo "<br>";
var_dump($produk3);