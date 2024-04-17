<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//$numberが入力された値
$number = $_POST["number"];
//ここに判定式

if($number == 7){
    echo '大当り';
} else {
    echo 'ハズレ';
}

exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework1</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="number" placeholder="ここに値を入力">
        <br>
    <button>送信</button>
</form>

</body>
</html>