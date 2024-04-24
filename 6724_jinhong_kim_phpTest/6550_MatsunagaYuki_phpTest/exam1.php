<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ここにコードを記述
    if (isset($_POST['name']) === true) {
        $name = $_POST['name'];
    }
    if (isset($_POST['age']) === true) {
        $age = $_POST['age'];
    }

    echo $name . 'さんの10年後は' . $age+10 . '歳です！';
    exit();
}

?>
10年後の年齢表示プログラム
<form action="exam1.php" method="post">
<!--ここに名前入力欄作成-->
    <label><input type="text" name="name"></label>
<br>
<!--ここに年齢入力欄作成-->
    <label><input type="text" name="age"></label>
<br>
<input type="submit" value="送信">
</form>
