<?php

class Item{

    public $name;
    public $price;

    public function showInfo(){
        echo "名前 : " . $this->name . '<br>';
        echo "価格(税抜) : " . $this->price . "円" . '<br>';
        echo "価格(税込) :" . $this->price*1.1. "円" . '<br>';
    }

}

?>
