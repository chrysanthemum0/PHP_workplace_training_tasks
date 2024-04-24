<?php

class Sample{
    private $name;
    private $age;

    //consturct
    public function __construct($name, $age)
    {
        $this->__set('name', $name);
        $this->__set('age', $age);
    }

    public function __set($var, $value)
    {
        $this->{$var} = $value;
    }

    public function __get($var)
    {
    return $this->{$var};
    }

    public function userInfo(){
        echo "My Name is " . $this->name . '<br>';
        echo "My Age is " . $this->age;
    }

}

$sample = new Sample('JIN', 25);
$sample->userInfo();


?>
