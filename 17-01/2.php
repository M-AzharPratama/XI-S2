<?php

$jam = 8;
$menit = 00;

$waktu = (($jam * 60)+$menit);

if($waktu >=420 && $waktu <=690){
    echo "waktu saat ini = ".$jam.".".$menit."<br>";
    echo "waktu kerja";
}

elseif($waktu >690 && $waktu <=735){
    echo "waktu saat ini = ".$jam.".".$menit."<br>";
    echo "waktu istirahat";
}

elseif($waktu >735 && $waktu <960){
    echo "waktu saat ini = ".$jam.".".$menit."<br>";
    echo "waktu kerja 2";
}
elseif($waktu >=0 && $waktu <=1440)
echo "waktu saat ini = ".$jam.".".$menit."<br>";
echo "waktu bebas";
?>