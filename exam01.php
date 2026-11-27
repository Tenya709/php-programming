<html>
<head><meta http-equiv="content-type" content="text/html;charset=utf-8"></head>
<body>
<?php

function arrayMax($arr) {
    $max = $arr[0];              
    foreach ($arr as $value) {
        if ($value > $max) {     
            $max = $value;
        }
    }
    return $max;
}


$data = array(1, 5, 6, 7, 9);
echo "最大値は " . arrayMax($data) . " です。<br>";


?>
</body>
</html>
