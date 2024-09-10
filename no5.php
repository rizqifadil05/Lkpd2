<?php
$bill = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];
//fungsi array merge adalah untuk menggabungkan dua array menjadi 1
//fungsu array unik adalah untuk menghapus nilai ganda
//fungsi rsort adalah untuk urutan dari terbesar ke terkecil
$gabungan = array_merge($bill, $bill2);

$gabungan = array_unique($gabungan);

rsort($gabungan);

echo "Hasil: " . implode(", ", $gabungan);
?>
