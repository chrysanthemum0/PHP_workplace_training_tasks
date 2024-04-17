<?php

$a = add(3, 7);
echo "3と7の足し算は" . $a . "です<br>";

$b = sub(3, 7);
echo "3と7の引き算は" . $b . "です<br>";

$c = avg(4, 7);
echo "3と7の平均は" . $c . "です<br>";


// 足し算メソッド
function add($x, $y)
{
  return $x + $y;
}

// 引き算メソッド
function sub($x, $y)
{
  return $x - $y;
}

//平均メソッド
function avg($x, $y)
{
  return ($x + $y) / 2;
}
