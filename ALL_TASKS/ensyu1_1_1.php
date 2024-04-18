<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//$numberが入力された値
$number = $_POST["number"];
//ここに判定式

if($number >= 0 && $number <= 5){
    echo '深夜です。';
} else if($number >= 6 && $number <= 11){
    echo 'おはようございます。';
} else if($number >= 12 && $number <= 17){
    echo 'こんにちは。';
} else if($number >= 18 && $number <= 23){
    echo 'こんばんは。';
} else {
    echo 'Please enter 0 ~ 24';
}

exit;

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR_1</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="number" placeholder="ここに時間を入力">
        <br>
    <button>送信</button>
</form>

</body>
</html>