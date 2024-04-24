<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //ここにコードを記述
  $name = $_POST["name"];
  $age = $_POST["age"];
  $age_after_10_year = $age + 10;
  echo $name . "さんの10年後は" . $age_after_10_year . "歳です！";
  exit();
}
?>
10年後の年齢表示プログラム
<form action="" method="post">
  <!-- ここに名前入力欄作成 -->
  <input type="text" name="name" placeholder="名前">
  <br>
  <!-- ここに年齢入力欄作成 -->
  <input type="number" name="age" placeholder="年齢">
  <br>
  <input type="submit" value="送信">
</form>