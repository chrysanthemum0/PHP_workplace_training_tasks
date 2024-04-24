<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ここにコードを記述
    if (isset($_POST['player_hand']) === true) {
        if ($_POST['player_hand'] == 0) {
            $player_hand = 'グー';
        } elseif ($_POST['player_hand'] == 1) {
            $player_hand = 'チョキ';
        } else {
            $player_hand = 'パー';
        }
    }
    $computer_hand = rand(0,2);
    if ($computer_hand == 0) {
        $computer = 'グー';
    } elseif ($computer_hand == 1) {
        $computer = 'チョキ';
    } else {
        $computer = 'パー';
    }

    if ($_POST['player_hand'] == $computer_hand) {
        echo 'あなたは' . $player_hand . '!<br>';
        echo 'コンピュータは' . $computer . '!<br>';
        echo '引き分けでした';
    } elseif ($_POST['player_hand'] == 0 && $computer_hand == 1) {
        echo 'あなたは' . $player_hand . '!<br>';
        echo 'コンピュータは' . $computer . '!<br>';
        echo 'あなたの勝ち';
    } elseif ($_POST['player_hand'] == 1 && $computer_hand == 2) {
        echo 'あなたは' . $player_hand . '!<br>';
        echo 'コンピュータは' . $computer . '!<br>';
        echo 'あなたの勝ち';
    } elseif ($_POST['player_hand'] == 2 && $computer_hand == 0) {
        echo 'あなたは' . $player_hand . '!<br>';
        echo 'コンピュータは' . $computer . '!<br>';
        echo 'あなたの勝ち';
    } else {
        echo 'あなたは' . $player_hand . '!<br>';
        echo 'コンピュータは' . $computer . '!<br>';
        echo 'あなたの負け';
    }
    exit();
}
?>
じゃんけん
<form action="" method="post">
    <input type="radio" name="player_hand" value="0">グー|
    <input type="radio" name="player_hand" value="1">チョキ|
    <input type="radio" name="player_hand" value="2">パー
    <br>
    <input type="submit" value="送信">
</form>
