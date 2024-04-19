<?php

require 'user.php';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEP4</title>
</head>
<body>
    <h1>User INFO</h1>
    <p>名前 : <?= $user1->name . '<br>'; ?></p>
    <p>年齢 : <?= $user1->age . '歳' . '<br>'; ?></p>
    <p>-------</p>
    <p>名前 : <?= $user2->name . '<br>'; ?></p>
    <p>年齢 : <?= $user2->age . '歳' . '<br>'; ?></p>
</body>
</html>
