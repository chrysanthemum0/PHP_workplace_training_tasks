<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
//ここに判定式

// グー チョキ パー

$play = ['グー', 'チョキ', 'パー'];

if($name =! null){
    echo $play[rand(0,2)];
}

exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework7</title>
</head>
<body>
  
    <form action="" method="post">
        <input type="text" name="name" placeholder="ここに氏名を入力">
        <br>
        <button>送信</button>
</form>

</body>
</html>

