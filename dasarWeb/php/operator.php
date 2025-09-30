<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br><br>";

echo "Hasil Penjumlahan (a + b) = $hasilTambah <br>";
echo "Hasil Pengurangan (a - b) = $hasilKurang <br>";
echo "Hasil Perkalian (a * b)   = $hasilKali <br>";
echo "Hasil Pembagian (a / b)   = $hasilBagi <br>";
echo "Sisa Bagi (a % b)         = $sisaBagi <br>";
echo "Hasil Pangkat (a ** b)    = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil Sama Dengan (a == b) = " . ($hasilSama ? "true" : "false") . "<br>";
echo "Hasil Tidak Sama (a != b) = " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Hasil Lebih Kecil (a < b) = " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Hasil Lebih Besar (a > b) = " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Hasil Lebih Kecil Sama (a <= b) = " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Hasil Lebih Besar Sama (a >= b) = " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Hasil AND (a && b) = " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Hasil OR (a || b)  = " . ($hasilOr ? "true" : "false") . "<br>";
echo "Hasil NOT (!a)     = " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Hasil NOT (!b)     = " . ($hasilNotB ? "true" : "false") . "<br>";

echo "<br>";
$a += $b;
echo "Hasil a += b = {$a} <br>";
$a -= $b;
echo "Hasil a -= b = {$a} <br>";
$a *= $b;
echo "Hasil a *= b = {$a} <br>";
$a /= $b;
echo "Hasil a /= b = {$a} <br>";
$a %= $b;
echo "Hasil a %= b = {$a} <br>";

$hasilIdentik = $a == $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Apakah a identik dengan b? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";

echo "<br>"; 
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persenKursiKosong = ($kursiKosong / $kursiTerisi) * 100;

echo "Persentase kursi yang masih kosong di restoran tersebut adalah: $persenKursiKosong%";
?>
