<?php

// function waktu1($waktu1,$jam1,$menit1){
//     echo $jam1.".".$menit1." = ".$waktu1."<br>";
// }
// function waktu2($waktu2,$jam2,$menit2){
//     echo $jam2.".".$menit2." = ".$waktu2."<br>";
// }
// function waktu3($waktu3,$jam3,$menit3){
//     echo $jam3.".".$menit3." = ".$waktu3."<br>";
// }

// waktu1("07.00 pm",19,00);
// waktu2("11.45 pm",23,45);
// waktu3("08.55 am",8,55);



function waktu($jam1=8,$jam2=19,$jam3=23){
$menit1 = 0;
$menit2 = 54;
$menit3 = 55;
$waktu = "07.00 pm 11.54 pm 08.55 am";
$sub_waktu1 = substr($waktu,0,8);
$sub_waktu2 = substr($waktu,8,10);
$sub_waktu3 = substr($waktu,17,15);
if($jam2 >= 19 || $jam2 < 23){
    echo $jam2.".".$menit2." = ".$sub_waktu1."<br>";
}
if($jam3 >= 23 || $jam3 < 8){
    echo $jam3.".".$menit3." = ".$sub_waktu2."<br>";
}
if($jam1 >= 8 || $jam1 < 19){
    echo $jam1.".".$menit1." = ".$sub_waktu3."<br>";
}
};

waktu()


?>