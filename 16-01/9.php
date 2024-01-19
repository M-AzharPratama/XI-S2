<?php

$berat = 44;
$tinggiA = 148;
$tinggi = $tinggiA / 100;
$beni = $berat / $tinggi;
echo $beni;
if($beni < 18.5){
    echo "kurang";
}
elseif($beni >=18.5 && $beni <22.9){
    echo "normal";
}
elseif($beni >=22.9 && $beni <24.9){
    echo "lebih";
}
elseif($beni >25){
    echo "obes";
}
?>