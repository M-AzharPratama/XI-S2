<?php

$bil1 = array(80, 77, 65, 89, 55, 12, 90, 86);
$bil2 = array(77, 99, 55, 81, 45, 90, 91, 98);

// Bilangan yang terdapat di kedua variabel
$sama = array_intersect($bil1, $bil2);
echo "Bilangan yang terdapat di kedua variabel: ";
foreach ($sama as $bilangan) {
    echo $bilangan . ' . ';
}
echo "<br>";

$beda = array_merge(
    array_diff($bil1, $bil2),
    array_diff($bil2, $bil1)
);
echo "Bilangan yang hanya terdapat di satu variabel: ";
foreach ($beda as $bilangan) {
    echo $bilangan . ' . ';
}



?>