<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //ここにコードを記述
  $age = $_POST["age"];
  if (!is_numeric($age)){
    echo "数値で入力してください";
  } elseif ( $age < 0  || $age > 130 ){
    echo "0以上130以下で入力してください";
  } else {
    echo $age . "歳で登録しました";
  }
  exit();
}
?>
年齢登録
<form action="" method="post">
  <input type="text" name="age" placeholder="年齢">
  <br>
  <input type="submit" value="送信">
</form>