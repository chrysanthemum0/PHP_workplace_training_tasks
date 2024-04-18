<?php

    $fp = fopen('./data/members.csv', 'r'); // open file *only read

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csvData</title>
</head>
<body>
    <h2>実行結果</h2>
    <h2>Company Members</h2>
     <table border="1">

     <?php 
        while ($data = fgetcsv($fp)) {
         ?>
        <tr>
            <td><?= $data[0]; ?></td>
            <td><?= $data[1]; ?></td>
            <td><?= $data[2]; ?></td>
        </tr>
        <?php } ?>


     </table>
</body>
</html>
