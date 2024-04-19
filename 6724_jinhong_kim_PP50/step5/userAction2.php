<?php

$name = '';
$age = '';

if(isset($_POST['name']) === true){
    $name = $_POST['name'];
}

if(isset($_POST['age']) === true){
    $age = $_POST['age'];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEP4</title>
</head>
<body>
    <p>会員登録しました。</p>
    <dl>
        <dt>お名前 : <?= $name; ?></dt><br>
        <dt>年齢 : <?= $age . '歳'; ?></dt>
    </dl>

</body>
</html>
