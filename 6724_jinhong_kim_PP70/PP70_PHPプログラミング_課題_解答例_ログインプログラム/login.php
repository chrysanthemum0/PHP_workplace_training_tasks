<?php
session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] != "") {
  // すでにログインしているので移動
  header("Location:top.php?login=already"); //トップに移動
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <?php
  if (isset($_GET["login"]) && $_GET["login"] == "fail") {
    echo "ユーザー名またはパスワードが違います<br>";
  }
  if (isset($_GET["login"]) && $_GET["login"] == "yet") {
    echo "まだログインしていません<br>";
  }
  ?>
  <form action="login_check.php" method="post">
    <input type="text" name="user_name" placeholder="ユーザー名">
    <br>
    <input type="password" name="password" placeholder="パスワード">
    <br>
    <input type="submit" value="ログイン">
  </form>

</body>

</html>
