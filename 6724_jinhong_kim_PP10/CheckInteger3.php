<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$age = $_POST["age"];
//ここに判定式

if($age >= 0 && $age <= 130){
    echo 'correct AGE';
} else if($age >= 131){
    echo 'please to enter 0 ~ 130';
} else {
    echo 'Check Your Age';
}

exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework3</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="number" name="age" placeholder="ここに年齢を入力">
        <br>
        <button>送信</button>
    </form>

</body>
</html>



