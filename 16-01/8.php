<?php

$andi = 25;
$mtk = 83;
$indo = 87;
$ing = 86;
$data = $mtk+$indo+$ing;
if($andi >=16 && $andi <=25){
    if($data >= 85 ){
        if($mtk >=87){
            if($indo >=87){
                if($ing >=86){
                    echo "lolos";
                }
                else{
                    echo "gagal";
                }
            }
            else{
                echo "gagal";
            }
        }
        else{
            echo "gagal";
        }
    }
    else{
        echo "gagal";
    }
}
else{
    echo "gagal";
}

?>