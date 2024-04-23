<?php
session_start();

if (!isset($_SESSION["login"])) {
  // まだログインしていないので移動
  header("Location:login.php?login=yet"); //トップに移動
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top</title>
</head>

<body>
  <?php
  if (isset($_GET["login"]) && $_GET["login"] == "already") {
    echo "すでにログインしています<br>";
  }
  ?>

  ようこそ、<?= $_SESSION["user_name"] ?>さん
  <br>
  <a href="logout.php">ログアウト</a>
</body>

</html>