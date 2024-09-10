<?php
//mendapatkan hari dalam saat ini adalah fungsi l
$hariBelanja = date('l'); 


$totalPembelian = 130000;

// Diskon hari Selasa
$diskonHariSelasa = 0.05;

// Diskon di atas 100.000
$diskonPembelianBesar = 0.07;

// hitung total diskon
$totalDiskon = 0;

// kalo hari Selasa, tambahkan diskon 5%
if ($hariBelanja == 'Tuesday') {
    $totalDiskon += $diskonHariSelasa;
}

// kalo  pembelian di atas 100.000, tambahkan diskon 7%
if ($totalPembelian > 100000) {
    $totalDiskon += $diskonPembelianBesar;
}

// Menghitung total pembayaran setelah diskon
$totalPembayaran = $totalPembelian - ($totalPembelian * $totalDiskon);
// fungsi number format adalah membuat nomor ada titiknya
echo "  Hari ini adalah: <b> $hariBelanja</b>";
echo "<br>";
echo "Total Pembelanjaan: <b>Rp" . number_format($totalPembelian) . " </b>";
echo "<br>";
echo "Total yang harus dibayar: <b>Rp" . number_format($totalPembayaran) . "</b>";
?>