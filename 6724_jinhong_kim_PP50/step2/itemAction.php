<?php

require 'item.php';

/* 
名前：はじめてのPHP入門
価格：1200円
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEP2</title>
</head>
<body>
    <h1>購入項目</h1>
    <p>名前：<?= $obj->name . '<br>'; ?></p>
    <p>価格：<?= $obj->pirce . '円'; ?></p>
</body>
</html>
