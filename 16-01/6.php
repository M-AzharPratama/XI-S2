<?php

for($a = 1;$a <= 25 ; $a++){
    if(($a%4) == 0 || ($a%5) == 0){
        echo $a."<br>";
    }
    // if(($a%5) == 0){
    //     echo $a."<br>";
    // }
}

for($i = 1;$i <= 25 ; $i++){
    if(($i%4) == 0){
        if(($i%5) == 0){
            echo "bilangan yang bisa dibagi 4 dan 5 = ".$i."<br>";
        }
    }
}

?>