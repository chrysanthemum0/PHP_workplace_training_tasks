<?php

    $numbers = [1, 7, 2, 7, 3]; 
    $num = 0;

    foreach ($numbers as $value) {
        if($value === 7){
            $num++;
        }
    } echo $num . '個あります。';
?>
