<?php
    require('User.php');
    $user = new User;
    if(isset($_POST['name'])){
        $user->name = $_POST['name'];
    }
    if(isset($_POST['age'])){
        $user->age = $_POST['age'];
    }

    $user->showInfo();
