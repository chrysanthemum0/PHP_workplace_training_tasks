<?php 

// 1부터 10까지 반복 그 중 2의 배수만 출력

for($i = 1; $i <= 10; $i++){
    if($i % 2 !== 0){
        continue;
    }
    echo $i . "<br>";
}

?>
