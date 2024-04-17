<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $age = $_POST["age"];
  //ここに判定式
  $errors = array();
  $errors = checkError($name, $age);
  if ($errors) {
    echo join("<br>", $errors);
  } else {
    echo "名前：" . $name . "、年齢：" . $age . "で登録しました";
  }

  exit;
}

// エラーチェック
function checkError($name, $age)
{
  $errors = [];
  if (mb_strlen($name) > 10) {
    $errors[] = "名前は10文字以内で入力してください";
  }
  if ($name == "admin") {
    $errors[] = "利用できない名前です";
  }
  if (strpos($name, '㌔')) {
    $errors[] = "㌔は禁止文字です";
  }
  if ($age < 0 || $age > 130) {
    $errors[] = "年齢は0以上130以下で入力してください";
  }
  return $errors;
}
?>

名前と年齢のエラーチェック
<form action="" method="post">
  <input type="text" name="name" placeholder="名前">
  <br>
  <input type="number" name="age" placeholder="年齢">
  <br>
  <input type="submit" value="送信">
</form>