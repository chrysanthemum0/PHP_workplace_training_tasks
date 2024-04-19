<?php

require 'item.php';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEP3</title>
</head>
<body>
    <h1>購入項目</h1>
    <p>名前：<?= $obj->name . '<br>'; ?></p>
    <p>価格(税抜)：<?= $obj->pirce. '円' . '<br>'; ?></p>
    <p>価格(税込)：<?= $obj->plusTax() . '円'; ?></p>
</body>
</body>
</html>
