<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$value_x = $_POST["value_x"];
$value_y = $_POST["value_y"];
//ここに判定式

// 엑스가 와이보다 클떄 
if($value_x > $value_y){
    echo 'x is bigger than y';
} elseif($value_x < $value_y){
    echo 'y is bigger than x';
} elseif($value_x == $value_y){
    echo 'smae number';
}

exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework2</title>
</head>
<body>

    <form action="" method="post">
        <input type="number" name="value_x" placeholder="xの値">
        <input type="number" name="value_y" placeholder="yの値">
        <br>
    <button>送信</button>
    </form>

</body>
</html>