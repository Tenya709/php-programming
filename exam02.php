<html>
<head><meta http-equiv="content-type" content="text/html;charset=utf-8"></head>
<body>
<?php
class Calorie {
    public $name, $weight, $cal;

    
    function __construct($na, $w) {
        $this->name = $na;
        $this->weight = $w;
    }

    
    function calorie_cal($who = "", $walk_time = "") {
        if ($who == "") {
            
            echo "名前が入力されていません<br>";
        } else if ($who != $this->name) {
            
            echo "{$who}のデータはありません<br>";
        } else if ($walk_time === "" || !is_numeric($walk_time) || $walk_time <= 0) {
           
            echo "歩いた時間（分）を正しく入力してください<br>";
        } else {
            $this->cal = $this->weight * $walk_time * 0.0570 * 0.87;
            
            echo $who . "（" . $this->weight . "kg）の" . $walk_time
                . "分歩行の消費カロリーは" . round($this->cal) . "kcalです。<br>";
        }
    }
}


$obj = new Calorie('Hana', 50);

$obj->calorie_cal('Hana', 5); 
$obj->calorie_cal('Taro', 5);   
$obj->calorie_cal();           
$obj->calorie_cal('Hana');      
?>
</body>
</html>
