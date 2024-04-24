<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //ここにコードを記述
  $hands = array("グー", "チョキ", "パー");

  $player_hand = $_POST["player_hand"];
  
  echo "あなたは" . $hands[$player_hand] . "！<br>";

  $computer_hand = rand(0,2);

  echo "コンピュータは" . $hands[$computer_hand] . "！<br>";
  
  if ( $player_hand == $computer_hand ){
    echo "引き分けでした<br>";       
  } elseif ( ($player_hand - $computer_hand + 3) % 3 == 1) {
    echo "あなたの負け<br>";
  } else {
    echo "あなたの勝ち<br>";
  }
  exit();
}
?>
じゃんけん
<form action="" method="post">
  <input type="radio" name="player_hand" value="0">グー | 
  <input type="radio" name="player_hand" value="1">チョキ | 
  <input type="radio" name="player_hand" value="2">パー
  <br>
  <input type="submit" value="送信">
</form>
