<?php

$arr = array('name' => "DANAKA TARO", 'age' => 25, 'job' => "NetworkEnjineer");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
  <tr>
    <th>名前</th>
    <td><?= $arr["name"] ?></td>
  </tr>
  <tr>
    <th>年齢</th>
    <td><?= $arr["age"] ?></td>
  </tr>
  <tr>
    <th>仕事</th>
    <td><?= $arr["job"] ?></td>
  </tr>
</table>
</body>
</html>
