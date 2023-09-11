<?php

// Kelas Persegi Panjang memiliki dua properti: panjang dan lebar.
class PersegiPanjang {
  public $panjang;
  public $lebar;

  public function __construct($panjang, $lebar) {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }

  // mengembalikan luas persegi panjang.
  public function getLuas() {
    return $this->panjang * $this->lebar;
  } 

  // mengembalikan keliling persegi panjang.
  public function getKeliling() {
    return 2 * ($this->panjang + $this->lebar);
  }
}

$persegiPanjang = new PersegiPanjang(10, 20);

//  menghitung luas persegi panjang.
echo "Luas persegi panjang : " . $persegiPanjang->getLuas();
echo "<br>";
// digunakan untuk menghitung keliling persegi panjang.
echo "Keliling persegi panjang : " . $persegiPanjang->getKeliling();