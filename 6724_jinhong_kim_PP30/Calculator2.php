<?php

function calculate($num1, $num2, $operation){
    switch($operation){
        case 'sum':
            return $num1 + $num2;
        case 'sub':
            return $num1 - $num2;
        case 'avg':
            return ($num1 + $num2) / 2;
        default:
            return "Invalid operation";
    }
}

echo "3と7の足し算は" . calculate(3, 7, 'sum') . "です<br>";
echo "3と7の引き算は" . calculate(3, 7, 'sub') . "です<br>";
echo "3と7の平均値は" . calculate(3, 7, 'avg') . "です<br>";

?>
