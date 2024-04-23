<?php
session_start(); // セッションを開始
session_destroy(); // セッション情報を削除
header("Location:login.php");//ログインページに移動
