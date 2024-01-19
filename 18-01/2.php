<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
$kompeten = array();

foreach ($bilangan as $bil) {
    if ($bil >= 75) {
        $kompeten[] = $bil;
        echo "Nilai ini " . $bil . " lulus <br>";
    } else {
        echo "Nilai ini " . $bil . " gagal <br>";
    }
}

?>
