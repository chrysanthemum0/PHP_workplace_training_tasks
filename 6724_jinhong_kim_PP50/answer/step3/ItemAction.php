<?php
    require('Item.php');
    $item = new Item;
    $item->name = 'はじめてのPHP入門';
    $item->price = 1200;
    $item->showInfo();
