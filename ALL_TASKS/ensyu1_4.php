<?php
// 配列 arr の各要素値の平均値を求めるプログラムを作成しなさい。
// 配列 arr の各要素値は 78,87,65,98,41,79,60 の値で初期化します。
// ■条件:foreach 文を使用

$arr = [78, 87, 65, 98, 41, 79, 60];

foreach ($arr as $value) {
    $avrSum = ( array_sum($arr)/count($arr) );
}   echo '平均値は' . $avrSum . 'です。';

?>
