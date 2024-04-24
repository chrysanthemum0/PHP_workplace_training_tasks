<?php
//配列を作成
$numbers = array(1, 5, 4, 3, 2);

foreach ($numbers as $value) {
    if ($value % 2 == 1) {
        echo $value . '<br>';
    }
}
