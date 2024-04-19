<?php
    class User{
        public $name;
        public $age;

        public function showInfo(){
            echo "名前:". $this->name ."<br>年齢:". $this->age ."歳<br>----<br>";
        }
    }