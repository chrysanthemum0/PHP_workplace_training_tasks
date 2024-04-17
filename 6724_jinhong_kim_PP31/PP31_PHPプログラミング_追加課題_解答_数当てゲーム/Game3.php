<?php
//ここでランダム数、カウンター生成
if (!isset($_POST['generated_number'])) {
  $generated_number = generateFourDigitString();
  $counter = 0;
} else {
  $generated_number = $_POST['generated_number'];
  $counter = $_POST["counter"] + 1;
}
echo $counter . "回目終了<br>";

$input_number = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input_number = $_POST["input_number"];
  // ここで関数を使用する
  $result = hitsAndBlows($input_number, $generated_number);
  $hits = $result[0];
  $blows = $result[1];
  // ここで結果表示
  echo $hits . "ヒット、" . $blows . "ブロー<br>";
  if ($hits == 4) {
    echo "当たりました";
    exit();
  }
}

function generateFourDigitString()
{
  // Step2で作成した関数を使用する
  // ここでは方針1の解答を使用していますが、方針2の解答でも問題ありません
  $random_numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  shuffle($random_numbers);
  return $random_numbers[0] . $random_numbers[1] . $random_numbers[2] . $random_numbers[3];
}

function hitsAndBlows($input_number, $generated_number)
{
  //ここにコードを書く
  $hits = 0;
  $blows = 0;
  $input_numbers = str_split($input_number);
  $generated_numbers = str_split($generated_number);
  for ($i = 0; $i <= 3; $i++) {
    if ($input_numbers[$i] == $generated_numbers[$i]) {
      $hits++;
    } elseif (in_array($input_numbers[$i], $generated_numbers)) {
      $blows++;
    }
  }
  return [$hits, $blows];
}
?>
<form action="" method="post">
  <input type="number" name="input_number" value="<?= $input_number ?>" placeholder="４桁の数字を入力">
  <input type="hidden" name="generated_number" value="<?= $generated_number ?>">
  <input type="hidden" name="counter" value="<?= $counter ?>">
  <br>
  <button>送信</button>
</form>
