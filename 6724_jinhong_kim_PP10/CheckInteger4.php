<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//$numberが入力された値
$number = $_POST["number"];
//ここに判定式

if($number >= 1 && $number <= 1000000){
    echo $number . 'は正の整数です';
} else if($number == 0){
    echo $number . 'は偶数です';
} else{
    echo $number . 'は負の偶数です';
}
    
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework4</title>
</head>
<body>

    <form action="" method="post">
        <input type="number" name="number" placeholder="ここに値を入力">
        <br>
        <button>送信</button>
</form>

</body>
</html>




