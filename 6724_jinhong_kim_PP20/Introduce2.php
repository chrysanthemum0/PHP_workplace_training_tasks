<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $hobbies = $_POST["hobbies"];
    //ここに判定式

    echo 'HI My name is ' . $name . '<br>' . 'My hobby is' . '<br>';

    foreach ($hobbies as $value) {
        echo $value . '<br>';
    }
    echo 'desu';

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
        <input type="text" name="name" placeholder="名前">
            <br>
        <input type="text" name="hobbies[]" placeholder="趣味1">
            <br>
        <input type="text" name="hobbies[]" placeholder="趣味2">
            <br>
        <input type="text" name="hobbies[]" placeholder="趣味3">
            <br>
        <button>送信</button>
    </form>
</body>

</html>
