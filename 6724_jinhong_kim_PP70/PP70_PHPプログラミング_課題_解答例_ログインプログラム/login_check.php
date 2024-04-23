<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  header("Location:login.php"); //ログインページに移動
}

if ($_POST["user_name"] == "reskill" && $_POST["password"] == "himitu") {
  // ログイン成功
  $_SESSION["login"] = $_POST["user_name"];
  $_SESSION["user_name"] = "リスキル";
  header("Location:top.php"); //トップに移動
} else {
  header("Location:login.php?login=fail"); //ログインページに移動
}
