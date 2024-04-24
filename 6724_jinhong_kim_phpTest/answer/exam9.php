<?php

$human = array('name' => "田中太郎", 'age' => 25, 'job' => "ネットワークエンジニア");

?>
<table border="1">
  <tr>
    <th>名前</th>
    <td><?= $human["name"] ?></td>
  </tr>
  <tr>
    <th>年齢</th>
    <td><?= $human["age"] ?></td>
  </tr>
  <tr>
    <th>仕事</th>
    <td><?= $human["job"] ?></td>
  </tr>
</table>
