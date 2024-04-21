<?php

class User{

    public $name;
    public $age;

    public function showInfo(){
        echo "名前： " . $this->name . "<br>";
        echo "年齢：" . $this->age . "<br>";
        echo "<br>-----------<br>";
        }
    }

/*
名前：田中太郎
年齢：20歳
----
名前：鈴木一郎
年齢：25歳 
*/
?>
