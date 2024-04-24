<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//ここにコードを記述

$name = $_POST['name'];
$age = $_POST['age'];
$afterAge = $age + 10; 

echo $name . 'さんの10年後は' . $afterAge . '歳です！';

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
    10年後の年齢表示プログラム
    <form action="" method="post">
        <input type="text" name="name" placeholder="name">
        <br>
        <input type="number" name="age" placeholder="age">
        <br>
        <input type="submit" value="送信">
    </form>
</body>
</html>
