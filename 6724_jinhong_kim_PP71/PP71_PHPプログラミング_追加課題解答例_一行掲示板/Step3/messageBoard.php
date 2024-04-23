<?php
session_start();
$token = "";
$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
for ($i = 0; $i < 20; $i++) {
  $token .= $characters[rand(0, strlen($characters)) - 1];
}
$_SESSION["token"] = $token;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>messageBoard</title>
</head>

<body>
  <form action="writeText.php" method="post">
    <input type="text" name="line" placeholder="一行メッセージ">
    <input type="hidden" name="token" value="<?= $token ?>">
    <button>送信</button>
  </form>
  ----<br>
  <?php
  $board = file("./messageBoard.txt");
  foreach ($board as $content) {
    echo $content . "<br>";
  }
  ?>
</body>

</html>
