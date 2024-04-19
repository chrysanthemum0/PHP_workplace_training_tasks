<?php
    require('User.php');
    $user1 = new User;
    $user1->name = '田中太郎';
    $user1->age = 20;

    $user2 = new User;
    $user2->name = '鈴木一郎';
    $user2->age = 25;
    
    $user1->showInfo();
    $user2->showInfo();
