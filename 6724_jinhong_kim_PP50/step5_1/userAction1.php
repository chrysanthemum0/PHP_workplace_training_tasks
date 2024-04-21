<?php

require('user.php');

$user1 = new User;
$user1->name = 'DANAKA TARO';
$user1->age = 40;

$user2 = new User;
$user2->name = 'SUZUKI ICHIRO';
$user2->age = 25;

$user1->showInfo();
$user2->showInfo();

?>