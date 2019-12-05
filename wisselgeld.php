<?php

$data = intval($argv[1]);

$array = array(50, 20, 10, 5, 2, 1);
$array2 = array(50, 20, 10, 5);

$cent1 = intval($data);
$cent = $data - $cent1;
$cent = intval(round($cent * 100));

foreach($array as $value) {

    $geld = floor($data / $value);
    if ($geld >= 1) {
        $data = $data - ($value * $geld);
        echo $geld . " x " . $value . " euro " . PHP_EOL;
    }
}


foreach ($array2 as $value) {
    $restcent = floor($cent1 / $value);
    if ($restcent >= 1) {
        $cent = $cent - ($value * $restcent);
        echo ($restcent . ' x ' . $value . 'cent' . PHP_EOL);
    }
}