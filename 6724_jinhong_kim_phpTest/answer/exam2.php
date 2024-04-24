<?php

// 配列を作成（変数名はnumbers）
$numbers = array(1,5,4,3,2);

// foreach文でnumbersを利用
foreach( $numbers as $number){
  // if文を利用して奇数の値だけを出力
  if ( $number %2 == 1){
    echo $number . "<br>";
  }
}
