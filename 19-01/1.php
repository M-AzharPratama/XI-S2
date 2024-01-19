<?php

// function bagi($angka){
//     foreach($angka as $bil)
//     if(1000 %$bil == 0){
//         echo "[$bil]";
//     }
//     else{
//         echo "";
//     }
// }

// function cetak($angka){
//     bagi($angka);
// }

// $angka = [3,5,7,10];
// echo "yang bisa dibagi 1000 : ";
// cetak($angka)


function bagi($angka){
    $hasilbagi = [];
    foreach($angka as $bil)
    if(1000 %$bil == 0){
        $hasilbagi[] = $bil;
    }
    return $hasilbagi;
}

function cetak($hasilbagi){
    echo "Yang bisa dibagi 1000 : [" . implode(', ', $hasilbagi) . "]";
}

$angka = [3,5,7,10];
$hasil = bagi($angka);
cetak($hasil)



?>
