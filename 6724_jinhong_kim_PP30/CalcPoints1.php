<?php

// 프리미엄 회원은 20% 적립
// 무료 회원은 10% 적립 


$price = 1000; //포인트 정의

$point1 = getPoints($price, true); //프리미엄 회원 변수
$point2 = getPoints($price, false); // 일반 회원 변수

echo "プレミアム会員には" . $point1 . "ポイント付与されます<br>"; // 출력
echo "無料会員には" . $point2 . "ポイント付与されます<br>"; // 출력 

function getPoints($price, $isPremium) {
    if($isPremium == true){
        $percentage = $price * 0.2;
        return $percentage;
    } else {
        $percentage = $price * 0.1;
        return $percentage;
    }
}

    /*
    function getPoints($price, $isPremium){
    $percentage = ($isPremium) ? 0.2 : 0.1; //$isPremium(true, false)에 20% 10% 곱
    return $price * $percentage;
    }
    
    */

    
?>
