<?php
$human = array('名前' => '田中太郎', '年齢' => 25, '仕事' => 'ネットワークエンジニア');

?>
<table border="1">
<?php
foreach ($human as $key => $value) {
    echo '<tr><th>'. $key .'</th><td>'. $value .'</td></tr>';
}
?>
</table>
