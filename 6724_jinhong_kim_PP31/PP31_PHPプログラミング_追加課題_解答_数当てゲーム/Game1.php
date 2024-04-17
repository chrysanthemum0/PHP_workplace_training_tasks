<?php
//ここでランダムな数とカウンターを生成
if (!isset($_POST['target_number'])) {
  $target_number = rand(1, 100);
  $counter = 0;
} else {
  $target_number = $_POST['target_number'];
  $counter = $_POST["counter"] + 1;
}
echo $counter . "回目終了<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // ここで関数を使用するようにする
  $result = bigOrSmall($_POST["input_number"], $target_number);
  echo $result;
  if ($result == "当たりました") {
    exit();
  }
}

function bigOrSmall($input_number, $target_number)
{
  //ここにもコードを書く
  if ($input_number > $target_number) {
    return "入力された値は答えよりも大きいです";
  } elseif ($input_number < $target_number) {
    return "入力された値は答えよりも小さいです";
  } else {
    return "当たりました";
  }
}

?>

<form action="" method="post">
  <input type="number" name="input_number" value="<?= $input_number ?>" placeholder="ここに値を入力">
  <input type="hidden" name="target_number" value="<?= $target_number ?>">
  <input type="hidden" name="counter" value="<?= $counter ?>">
  <br>
  <button>送信</button>
</form>
