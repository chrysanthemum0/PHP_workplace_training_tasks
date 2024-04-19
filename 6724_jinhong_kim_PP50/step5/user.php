<?php

class User{

    public $name;
    public $age;

    public function showinfo(){
        return;
    }

}

$user1 = new User;
$user1->name = '田中太郎';
$user1->age = 20;

$user2 = new User;
$user2->name = '鈴木一郎';
$user2->age = 25;


/*
名前：田中太郎
年齢：20歳
----
名前：鈴木一郎
年齢：25歳 
*/
?>
