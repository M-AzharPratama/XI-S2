<?php
$i = 90;
for($a = 1;$a <= 30;$a++){
    if(($a%3) == 0){
        if(($i%$a) == 0){
            echo $a."<br>";
        }
    }
}

?>