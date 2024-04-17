<?php

//함수 사용 
//이름과 현재 나이 출력 
// 그 밑에 10년 후 나이 출력

// introduce('Danaka Taro', 25);
// introduce('Suzuki Ichiro', 25)

// function ageCl($num1, $num2){

    
// }

introduce("Danaka Taro", 25);
introduce("Suzuki Ichiro", 30);

function introduce($name, $age) {
    echo $name . " " . $age . " 歳です" . '<br>';
    echo (10 + $age) . " 歳です"  . '<br>';
}

?>
