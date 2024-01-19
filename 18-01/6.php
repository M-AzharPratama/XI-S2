<?php

$student = [
    [
        'nama'=>'andi',
        'nilai'=>[80,78,82,78,88],
    ],
    [
        'nama'=>'beni',
        'nilai'=>[86,70,80,85,81],
    ],
    [
        'nama'=>'dani',
        'nilai'=>[83,91,70,73,81],
    ],
    [
        'nama'=>'eko',
        'nilai'=>[89,85,84,86,88],
    ],
];


foreach ($student as $siswa) {
    $nilai = array_sum($siswa['nilai']);
    echo ("Nama: ".$siswa['nama']."<br>Nilai: ".$nilai."<hr>");
}

?>