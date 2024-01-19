<?php

$a = 9;

function hitungSuku($a, $n) {
    return $a * 4 + $n * 3;
}

echo "Hasil perhitungan suku pertama sampai suku ke-12<hr>";

for ($n = 1; $n <= 12; $n++) {
    $hasil = hitungSuku($a, $n);
    echo "Suku ke-$n: $hasil <hr>";
}

?>
