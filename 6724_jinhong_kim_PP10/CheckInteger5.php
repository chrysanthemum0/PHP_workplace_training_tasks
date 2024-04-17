<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$color = $_POST["color"];
//ここに判定式

// red grenn blue

$red = 'red';
$green = 'green';
$blue = 'blue';

if($color == $red){
    echo 'This Color is Red!';
} else if($color == $green){
    echo 'This Color is Green!';
} else if($color == $blue){
    echo 'This Color is Blue!';
} else {
    echo 'please enter correct color';
}

exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework5</title>
</head>
<body>
    
</body>
</html>


<form action="" method="post">
<input type="text" name="color" placeholder="ここに色名を入力">
<br>
<button>送信</button>
</form>