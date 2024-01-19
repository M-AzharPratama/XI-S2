<?php

$andi = 16;
$tandi = 2024 - $andi; 

$dani = $andi;
$tdani = 2024 - $dani; 

$beni = $dani+3;
$tbeni = 2024 - $beni; 

$eko = $beni-5;
$teko = 2024 - $eko; 

$kabisat = $andi-$eko;

echo "umur andi = $andi tahun lahir($tandi)";
echo "<br>";
echo "umur beni = $beni tahun lahir($tbeni)";
echo "<br>";
echo "umur dani = $dani tahun lahir($tdani)";
echo "<br>";
echo "umur eko = $eko tahun lahir($teko)";
echo "<br>";
echo "Perbedaan tahun Andi dan Eko = $kabisat";

if ($kabisat %4==0) {
    echo "<br>Andi dan Eko lahir pada tahun kabisat yang sama.";
} elseif ($kabisat %4!=0) {
    echo "<br>andi lahir pada tahun kabisat, sedangkan eko tidak.";
} else {
    echo "<br>eko lahir pada tahun kabisat, sedangkan andi tidak.";
}
?>