<?php

$jPeserta = 121;
$lomba = "web app";
$pendidikan = "smp"; 
$tahunPelaksanaan = date('y');

if($pendidikan == "smp"){
    $tingkat = "P";
}
elseif($pendidikan == "sma"||$pendidikan == "smk"||$pendidikan == "ma"){
    $tingkat = "A";
}
// else{
//     $tingkat = "A";
// }



if($lomba == "web app"){
     $kode = "01W";
}
elseif($lomba == "android"){
    $kode = "02A";
}
elseif($lomba == "game"){
    $kode = "03G";
}
echo "nomor peserta eko adalah = ". ($jPeserta + 1) . $kode . $tingkat . $tahunPelaksanaan;

?>
