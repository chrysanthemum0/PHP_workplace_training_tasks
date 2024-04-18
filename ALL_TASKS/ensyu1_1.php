<!--

変数xの値に応じて、下記のメッセージが出力されるようなプログラムを作成しなさい。
なお、x の値がマイナス値なら 0、23 を超える値なら 23 で初期化します。
x の値 0~5 「深夜です。」
x の値 6~11 「おはようございます。」
x の値 12~17 「こんにちは。」
x の値 18~23 「こんばんは。」
■条件:if, switch 文を使用
■プログラム名:ensyu\chap1\ensyu1-1.php
■実行イメージ
9時です。

-->


<?php
    //if 
    $x = 5;
    $msg = '';

    if($x = 0 && $x <=5){
        $msg = '深夜です。';
    } else if($x = 6 && $x <= 11){
        $msg = 'おはようございます。';
    } else if($x = 12 && $x <= 17){
        $msg = 'こんにちは。';
    } else if($x = 18 && $x <= 23){
        $msg = 'こんばんは。';
    } else {
        $msg = 'Please Check %x';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR 1_1</title>
</head>
<body>
    <?= $msg; ?>
</body>
</html> 