<?php

// 幅と高さをで受け取り、長方形の面積を返す関数
function calculateRectangleArea($width, $height) {
  return $width * $height;
}

// 底辺と高さを受け取り、三角形の面積を返す関数
function calculateTriangleArea($base, $height) {
  return $base * $height / 2;
}

// 関数を使って幅3、高さ5の長方形の面積を出力
echo "長方形の面積は " . calculateRectangleArea(3,5);

echo "<br>";

// 関数を使って底辺7、高さ3の三角形の面積を出力
echo "三角形の面積は " . calculateTriangleArea(7,3);
