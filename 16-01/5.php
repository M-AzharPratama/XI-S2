<?php

$andi = 154000;

if($andi > 100000){
    $dis = ($andi * 7/100);
    $harga = $andi -$dis;
    echo "RP.".number_format($harga).".00";
}else{
    echo $andi;
}

?>