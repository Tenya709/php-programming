<?php
function sum($n) {
    $a = 0;
    for ($i = 1; $i <= $n; $i++) {
        $a += $i;
    }
    return $a;
}

$n = 10;
print sum($n);
?>
