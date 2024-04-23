<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["line"]) && $_POST["line"] != "") {
    if (
      isset($_SESSION["token"]) &&
      $_SESSION["token"] != "" &&
      isset($_POST["token"]) &&
      $_POST["token"] != "" &&
      $_SESSION["token"] == $_POST["token"]
    ) {
      // テキストに追記書き込み
      $filename = './messageBoard.txt';
      // ファイルを開く（'a'は追記モード）
      $fp = fopen($filename, 'a');
      // ファイルに書き込む
      $data = $_POST["line"] . "\n";
      fputs($fp, $data);
      // ファイルを閉じる
      fclose($fp);
    }
  }
}

header("Location:messageBoard.php");
