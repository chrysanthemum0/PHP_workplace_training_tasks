<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $price = $_POST["price"];
  // $rankは無料を選択した場合は0、プレミアを選択した場合は1が入ります
  $rank = $_POST["rank"];

  // ここに判定式
  switch ($rank) {
    case 0:
      $rank_name = "無料";
      $is_premier = false;
      break;
    case 1:
      $rank_name = "プレミア";
      $is_premier = true;
      break;
  }
  echo $rank_name . "会員には" . getPoints($price, $is_premier) . "ポイント付与されます<br>";
  exit;
}

function getPoints($price, $is_premier)
{
  if ($is_premier) {
    $point = floor($price * 20 / 100);
  } else {
    $point = floor($price * 10 / 100);
  }
  return $point;
}
?>

<form action="" method="post">
  <input type="radio" id="free" name="rank" value="0" checked>
  <label for="free">無料</label>
  <input type="radio" id="premier" name="rank" value="1">
  <label for="premier">プレミアム</label>
  <br>
  <input type="number" name="price" placeholder="価格">
  <br>
  <button>送信</button>
</form>
