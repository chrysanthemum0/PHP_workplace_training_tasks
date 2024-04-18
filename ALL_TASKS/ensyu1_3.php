<!-- 
変数 num の値が素数かどうか調べるプログラムを作成しなさい。
素数であれば「素数です」、素数でなければ「素数ではありません」が出力されるようにしま
す。

■解法
2以上の自然数において、その自然数が1とその自然数自身の他に約数が存在しない場合、
その自然数は素数とも呼ばれます。
素数かどうか判定するには、自然数を、実際に2から、自然数より1小いさい値まで割って
みて、割り切れるのかどうか調べます。(2の場合は、割らずに素数と判定します。)
もし、割り切れれば余り
が0となり、その自然数は素数ではありません

■プログラム名:ensyu\chap1\ensyu1-3.php
■実行イメージ

print ^^> 
77は素数ではありません
7は素数です 
-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//$numberが入力された値
$number = $_POST["number"];
//ここに判定式


    //ここに判定式
    $is_prime = true;
    if($number < 2) {
        $is_prime = false;
    } else {
        for($i = 2; $i <= sqrt($number); $i++) {
            if($number % $i == 0) {
                $is_prime = false;
                break;
            }
        }
    }

    if($is_prime){
        echo $number . 'は素数です';
    } else {
        echo $number . 'は素数ではありません';
    }


exit;

/* 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$numberが入力された値
    $number = $_POST["number"];

    //ここに判定式
    $is_prime = true;
    if($number < 2) {
        $is_prime = false;
    } else {
        for($i = 2; $i <= sqrt($number); $i++) {
            if($number % $i == 0) {
                $is_prime = false;
                break;
            }
        }
    }

    if($is_prime){
        echo $number . 'は素数です';
    } else {
        echo $number . 'は素数ではありません';
    }

    exit;
}

**/

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR_1</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="number" placeholder="ここに入力">
        <br>
    <button>送信</button>
</form>

</body>
</html>