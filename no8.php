<?php
//fungsi array map adalah untuk menerapkan fungsi pada setiap elemen dari satu atau lebih array
//fungsi print r adalah menampilkan dalam bentuk format
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));
print_r($uniqueJurusan);
?>