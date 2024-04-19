<?php
class Item{
    public $name;
    public $pirce;

    public function plusTax() { //클래스 내에서 메서드 (함수) 정의 
        return $this->pirce * 1.1;
    }

    public function showInfo(){
        
    }
}

$obj = new Item;
$obj->name = 'シャンプー';
$obj->pirce = 852;

?>
