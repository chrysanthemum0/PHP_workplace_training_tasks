<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csvDataList</title>
</head>

<body>
  <?php
  $name = "";
  if (isset($_GET["name"])) {
    $name = $_GET["name"];
  }

  ?>
  <form action="" method="get">
    <input type="text" name="name" value="<?= $name ?>" placeholder="名前で検索">
    <br>
    <input type="submit" value="検索">
  </form>
  <hr>
  <table border="1">
    <thead>
      <th>名前</th>
      <th>年齢</th>
      <th>所属部</th>
    </thead>
    <tbody>
      <?php
      $file = fopen("./members.csv", "r");
      while ($data = fgetcsv($file)) {
        if ($name != "" && $data[0] != $name) {
          continue;
        }

        echo "<tr>";
        echo "<td>" . $data[0] . "</td>";
        echo "<td>" . $data[1] . "</td>";
        echo "<td>" . $data[2] . "</td>";
        echo "</tr>";
      }
      fclose($file);
      ?>
    </tbody>
  </table>
</body>

</html>