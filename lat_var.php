<?php
// Menampilkan pesan
$pesan = "Gadjah Mada Tua Angkatan 2025";
echo "Hallo, " . $pesan;
echo "<br>";

// Menampilkan data array
$fakultas = array("S1", "S2", "Vokasi");
echo $fakultas[2] . "<br>";

// Operasi penjumlahan
$a = 25;
$b = 25;
$a = $a + $b;
echo $a . "<br>";

// Penjumlahan singkat
$a += $b;
echo $a . "<br>";

// Menggabungkan angka menjadi teks
$a = $a . $b;
echo $a . "<br>";

// Menggabungkan teks secara singkat
$a .= $b;
echo $a;
?>
