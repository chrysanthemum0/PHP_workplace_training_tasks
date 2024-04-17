<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST["price"];
    // $rankは無料を選択した場合は0、プレミアを選択した場合は1が入ります
    $rank = $_POST["rank"];

//ここに判定式
//렝크가 무료일때 0, 프리미엄 일때 1 -> if
    $point = getPoints($price, $rank);
    //echo $rank . $point . "ポイント付与されます<br>"; // 출력
 }
 
    function getPoints($price, $rank){
        if($rank == 0){
            $percentage = $price * 0.1;
            echo '無料会員には' . $percentage . 'ポイント付与されます';
        } else if($rank == 1){
            $percentage = $price * 0.2;
            echo 'プレミアム会員にあは' . $percentage . 'ポイント付与されます';
        }
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
        <input type="radio" id="free" name="rank" value="0" checked>
            <label for="free">無料</label>
        <input type="radio" id="pre mier" name="rank" value="1">
            <label for="premier">プレミアム</label>
                <br>
        <input type="number" name="price" placeholder="価格">
                <br>
        <button>送信</button>
    </form>

</body>
</html>
