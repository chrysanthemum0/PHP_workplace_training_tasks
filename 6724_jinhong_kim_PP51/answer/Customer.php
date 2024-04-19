<?php
class Customer {
    public $name;
    public $address;

    //カスタマーをセット
    public function setCustomer($name , $address = '(住所不定)'){
        $this->name = $name;
        $this->address = $address;
    }
}
//３人分のインスタンス追加
$customer1 = new Customer();
$customer1->setCustomer("山田太郎", "兵庫県");
$customer2 = new Customer();
$customer2->setCustomer("鈴木一郎");
$customer3 = new Customer();
$customer3->setCustomer("山本次郎","東京都");

//配列まとめとく
$customers = [$customer1 , $customer2 , $customer3]; 
?>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>住所</th>
        </tr><?php foreach($customers as $customer) { ?>
        <tr>
            <td><?= $customer->name ?></td>
            <td><?= $customer->address ?></td>
        </tr> <?php } ?>
    </table>