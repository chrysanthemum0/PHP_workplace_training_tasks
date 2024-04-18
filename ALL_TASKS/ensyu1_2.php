<!-- 
1 から変数 num の値までの総和を求めるプログラムを作成しなさい。
変数 num の初期値は 10 とします。
■条件:for 文を使用
■プログラム名:ensyu\chap1\ensyu1-2.php
■実行イメージ
1から10の合計は55 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR_2</title>
</head>
<body>
    
    <?php

        $num = 0;
        for($i = 0; $i <= 10; $i++){
            $num += $i; 
        }
        echo $num;


    ?>

</body>
</html>