<?php
// 方針1の解答でも、方針2の解答のどちらでも問題ありません
// この解答をコピーして使用する際は、一方の解答をコメントアウトして使ってください

// 方針1の解答
function generateFourDigitString()
{
    //ここで生成
    $random_numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    shuffle($random_numbers);
    return $random_numbers[0] . $random_numbers[1] . $random_numbers[2] . $random_numbers[3];
}
echo generateFourDigitString();

// 方針2の解答
function generateFourDigitString()
{
    $min = 0;
    $max = 9999;
    $random_number = rand($min, $max);
    $four_digit_string = str_pad($random_number, 4, '0', STR_PAD_LEFT);
    return $four_digit_string;
}
echo generateFourDigitString();
