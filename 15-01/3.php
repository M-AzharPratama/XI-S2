<?php

$panjang = 13;
$lebar = 9;

$dani = $panjang*$lebar;

if($dani < 90){
    echo "rumah andi tipe 36 dengan ukuruan $dani m2";
}
elseif($dani >=90 && $dani < 96){
    echo "rumah andi tipe 45 dengan ukuruan $dani m2";
}
elseif($dani >=96 && $dani < 120){
    echo "rumah andi tipe 54 dengan ukuruan $dani m2";
}
elseif($dani >=120 && $dani < 150){
    echo "rumah andi tipe 60 dengan ukuruan $dani m2";
}
elseif($dani > 150){
    echo "rumah andi tipe 70 dengan ukuruan $dani m2";
}

?>