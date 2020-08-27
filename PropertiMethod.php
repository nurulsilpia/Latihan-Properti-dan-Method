<?php 
	class Kendaraan{
		
		//ini adalah contoh dari properti
		public $namaKendaraan = "Motor";
		public $merk = "Genio";

		//ini adalah contoh dari method
        public function getCetak(){
        return "$this->namaKendaraan, $this->merk";
        }
	}

    //object dengan nilai default
    $produk = new Kendaraan();
    echo "Kendaraan: " . $produk->getCetak();

    echo "<br>";

    //object dengan nilai yang diubah
    $produk2 = new Kendaraan();
    $produk2->namaKendaraan="Mobil";
    $produk2->merk="Pajero";
    echo "Kendaraan: " . $produk2->getCetak();
?>