<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
//ここに判定式

if(mb_strlen($name) <= 20){
    echo $name . ' Welcome to PHP Class';
} else {
    echo 'Plase Check Your Name'; 
}

exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework6</title>
</head>
<body>
    
    <form action="" method="post">
    <input type="text" name="name" placeholder="ここに氏名を入力">
        <br>
    <button>送信</button>
    </form>

</body>
</html>

