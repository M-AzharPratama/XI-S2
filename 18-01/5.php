<?php

$array = [1,2,3];
$perkalian =[1,2,3,4,5,6,7,8,9,10]; 

foreach ($array as $bil){
    foreach($perkalian as $kali){
        $data = $bil * $kali;
        echo $bil."x".$kali." = ".$data."<br>";
    }
}

// for($array=1;$i<=10;$i++){
//     for($a=1;$a<=3;$a++)
// }

?>