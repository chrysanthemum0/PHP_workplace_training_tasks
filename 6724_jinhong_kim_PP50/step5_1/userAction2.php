<?php

require 'user.php';
$user = new User;

if(isset($_POST['name']) === true){
$user->name = $_POST['name'];
}

if(isset($_POST['age']) === true){
    $user->age = $_POST['age'];
}

$user->showInfo();

?>