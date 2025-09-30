<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>"; 

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>"; 
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>"; 

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>"; 

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br><br>";
sort($nilaiSiswa);
$nilaiSiswa = array_slice($nilaiSiswa, 2, -2);
$totalNilaiAkhir = array_sum($nilaiSiswa);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilaiAkhir";

echo "<br><br>";

$hargaProduk = 120000;
$diskon = 0;
if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}
$hargaAkhir = $hargaProduk - $diskon;
echo "Harga yang harus dibayar setelah diskon adalah: Rp " . number_format($hargaAkhir, 0, ',', '.');

echo "<br><br>";
$poinPemain = 550;
$totalSkorPemain = $poinPemain;
$hadiahTambahan = ($totalSkorPemain > 500) ? "YA" : "TIDAK";
echo "Total skor pemain adalah: $totalSkorPemain<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>