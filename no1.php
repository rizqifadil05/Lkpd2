<?php

$hbd = "Selamat Ulang Tahun";
//mencari kecocokan dari kata yang mau dicari menggunakan preg match all
//fungsi srt adalah untuk menyimpan data yaitu simbol yang ada di kalimat
//fungsi implode adalah menggabungkan elemen dari array ke string
if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $hbd, $srt)) {
    echo "Teks : $hbd";
    echo "<br>";
    echo "Simbol yang terdapat pada kalimat: " . implode(', ', $srt[0]);
} else {
    echo "Teks : $hbd";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}

?>