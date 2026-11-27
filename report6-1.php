<?php

function arrayMin($array) {
    $min = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }

    return $min;
}

$data = array(12, 5, 8, 3, 15, 7);

echo "配列の最小値は " . arrayMin($data) . " です。";

?>