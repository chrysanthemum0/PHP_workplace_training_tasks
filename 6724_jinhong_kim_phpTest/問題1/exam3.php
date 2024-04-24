<?php

//폭과 높이를 받아 직사각형의 면적을 돌려주는 함수


function combineXY($x, $y){
    return $x * $y; 
}

function combineXY2($x, $y){
    return 0.5 * $x * $y;
}

echo "四角形の面積は" . combineXY(3, 5);
echo "<br>四角形の面積は" . combineXY2(7, 3);

// 바닥과 높이를 받아 삼각형의 면적을 돌려주는 함수

// 함수를 사용하여 폭 3, 높이 5의 직사각형 면적 출력
    
// 함수를 사용하여 바닥 7, 높이 3의 삼각형 면적 출력

?>
