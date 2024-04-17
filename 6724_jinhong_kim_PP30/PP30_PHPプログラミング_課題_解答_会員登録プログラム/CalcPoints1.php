<?php

$price = 1000;
$point1 = getPoints($price, true);
echo "プレミア会員には" . $point1 . "ポイント付与されます<br>";

$point2 = getPoints($price, false);
echo "無料会員には" . $point2 . "ポイント付与されます<br>";

// ポイント計算メソッドを以下に定義
function getPoints($price, $isPremier)
{
  $point = 0;
  if ($isPremier) {
    $point = floor($price * 20 / 100);
  } else {
    $point = floor($price * 10 / 100);
  }
  return $point;
}
