<?php

class User{
    public $name;
    public $age;

    public function showInfo(){
        echo "名前: " . $this->name . '<br>';
        echo "年齢: " . $this->age . "歳" . '<br>';
        echo "<br>-----------<br>";
    }
}

?>