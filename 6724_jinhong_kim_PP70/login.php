
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<body>
<?php
    if(isset($_GET["login"]) && $_GET["login"] =='fail'){
        echo 'Check Your ID or Password<br>';
    }
?>

    <form action="login_check.php" method="post" >
        <p><label for="login"></label>
        <input type="text" name="login" id="login"
            placeholder="ログイン名" required></p>
        <p><label for="password"></label>
        <input type="password" name="password" id="password"
            placeholder="パスワード" required></p>
        <p><input type="submit" value="ログイン"></p>
    </form>
</body>
</body>
</html>
