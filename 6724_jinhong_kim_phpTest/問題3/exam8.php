<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//ここにコードを記述

$hands = array("グー", "チョキ", "パー");

$playerHand = $_POST['player_hand'];
echo "あなたは" . $hands[$playerHand] . "！<br>";

$computerHand = rand(0, 2); 
echo "パソコンは" . $hands[$computerHand]. "！<br>";

if ($playerHand == $computerHand){
    echo "引き分けでした<br>";       
  } elseif ( ($playerHand - $computerHand + 3) % 3 == 1) {
    echo "あなたの負け<br>";
  } else {
    echo "あなたの勝ち<br>";
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

    じゃんけん
    <form action="" method="post">
        <input type="radio" name="player_hand" value="0">グー|
        <input type="radio" name="player_hand" value="1">チョキ|
        <input type="radio" name="player_hand" value="2">パー
        <br>
        <input type="submit" value="送信"></form>

</body>
</html>
