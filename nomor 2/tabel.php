<?php

// Kode ini membuat kelas Tabel dengan satu properti: baris. Properti ini berisi array dua dimensi yang menyimpan data tabel.
class Tabel {
  public $baris;

  public function __construct($baris) {
    $this->baris = $baris;
  }

// Metode cetak() digunakan untuk mencetak tabel. Metode ini akan mencetak tabel dengan data yang ada di properti baris.
  public function cetak() {
    echo '<table>';
    foreach ($this->baris as $row) {
      echo '<tr>';
      foreach ($row as $col) {
        echo '<td>' . $col . '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
  }
}

// data pada tabel
$data = [
  ['Nama', 'NPM', 'Jurusan'],
  ['Reta cantik', 'G1A021038', 'Informatika'],
  ['Novia cantik', 'G1A021072', 'Informatika'],
];

$tabel = new Tabel($data);

// CSS Internal

echo '<style>';
echo '
table {
    border-collapse: collapse;
    width: 60%;
    background-color: #fafafa;
  }
  
  th, td {
    padding: 10px;
    border: 1px solid #ccc;
  }
  
  th {
    background-color: #000;
    color: #fff;
  }
  
  td {
    color: #333;
  }
  
  tr:nth-child(even) {
    background-color: #f5f5f5;
  }
';
echo '</style>';

$tabel->cetak();