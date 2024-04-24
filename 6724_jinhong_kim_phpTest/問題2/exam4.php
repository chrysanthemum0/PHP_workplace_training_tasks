<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//ここにコードを記述

$age =  $_POST["age"];

if(is_numeric($age) === false){
    echo "数値を入力してください。";
} elseif($age <= 0 || $age >= 130){
    echo "0以上 130以下で入力してください";
} else{
    echo $age . "歳で登録しました。";
}


exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    年齢登録
    <form action="" method="post">
     <input type="text" name="age" placeholder="年齢">
     <br>
     <input type="submit" value="送信">
    </form>
</body>
</html>
