<?php 

//jualan produk
//kokik
//game

class Produk {
    public $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
 
            public function getLabel() {
                return "$this->penulis, $this->penerbit";
            }
}

// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul= "uncarhted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "kimuro";
$produk3->penerbit = "Shone Jump";
$produk3->harga = 3000;

$produk4 = new Produk();
$produk4->judul= "uncharter";
$produk4->penulis= "neil Deusdaf";
$produk4->penerbit= "sony sdf";
$produk4->harga = 250000;


echo "Komik : " .$produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();