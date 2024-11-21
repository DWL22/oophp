<?php 

//jualan produk
//kokik
//game

class Produk {
    public $judul, 
            $penulis,
            $penerbit ,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe ;
            
 
            public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain= 0, $tipe ) {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->jmlHalaman = $jumlahHalaman;
                $this->waktuMain = $waktuMain;
                $this->tipe = $tipe;
            }
            public function getLabel() {
                return "$this->penulis, $this->penerbit";
            }

            public function getInfoLengkap() {
                $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
                if($this->tipe == "Komik") {
                    $str .= " - {$this->jmlHalaman} Halaman.";
                }else if ($this->tipe == "Game") {
                    $str .= " ~{$this->waktuMain} Jam.";
                }
                return $str;
            }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Narutor","kishimoto","sony jump",30000, 100, 0, "Komik");
$produk2 = new Produk("uncharted","neil des","sony",250000, 0, 50, "Game");


// Komik :Naruto | kishimoto, sony jump
// Game :neil des, sony
// Narutor | kishimoto, sony jump (Rp. 30000)

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();