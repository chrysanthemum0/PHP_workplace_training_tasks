<?php

$msg = '';

session_start();

//로그인 되어 있는지 안되어있는지를 $_SESSION['login']에 확인 
if(!isset($_SESSION['login']) || $_SESSION['login'] = ''){
    $msg = 'ログインされていますん。';
} else {
    $msg = 'ようこそ、' . $_SESSION['name'] . 'さん。';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <p><?= $msg; ?></p>
    <p><a href="logout.php">LOGOUT</a></p>
</body>
</html>
