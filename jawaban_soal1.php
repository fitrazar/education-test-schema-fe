<?php
    $data = [5, 4, 1, 8, 8, 8, 1];
    $string = rtrim(implode(', ', $data), ',');
    echo "Array [ ".$string." ] <br>";
    $hitung = array_count_values($data);
    arsort($hitung);
    $hasil = array_keys($hitung);
    echo "total data paling banyak keluar adalah ".$hasil[0]." dengan jumlah ".$hitung[$hasil[0]];
?>
