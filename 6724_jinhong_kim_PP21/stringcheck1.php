<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $characters = $_POST["characters"];
    //ここにコードを書く

    $strLength = strlen($characters);
    echo $strLength;

    exit;
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="characters" placeholder="ここに文字列を入力">
        <br>
        <button>送信</button>
    </form>
</body>

</html>
