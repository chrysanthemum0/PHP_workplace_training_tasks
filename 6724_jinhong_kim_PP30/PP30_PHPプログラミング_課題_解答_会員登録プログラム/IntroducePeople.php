<?php

introduce("田中太郎", 25);

introduce("鈴木一郎", 30);

// 年齢計算メソッド
function introduce($name, $age)
{
  echo $name . $age . "歳です<br>";
  echo "10年後は" . ($age + 10) . "歳です<br>";
  echo "---<br>";
}
