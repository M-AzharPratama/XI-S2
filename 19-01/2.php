<?php

function waktu($waktu,$sholat,$makan){
    $istirahat = $sholat+$makan;
    $kerja = (($waktu*60)-$istirahat);
    $jam = floor($kerja / 60);
    $menit = $kerja %60;
    echo "total waktu = ".$waktu."jam <br>";
    echo "waktu istirahat = ".$istirahat."menit ( sholat:".$sholat."menit + makan:".$makan."menit )<br>";
    echo "waktu kerja = ".$jam."jam ".$menit."menit <br>";

}

$waktu = 8;
$sholat = 20;
$makan = 30;
waktu($waktu,$sholat,$makan)

?>