<?php
function power($x, $n) {
    $y = 1.0;
    for ($i = 0; $i < $n; $i++) {
        $y *= $x;
    }
    return $y;
}

$x = 8;
$y = power($x, 3);
$z = power($y + $x, 2);
print "$y <hr> $z <br>";
?>
