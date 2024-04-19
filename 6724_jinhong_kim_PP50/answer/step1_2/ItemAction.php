<?php
    require('Item.php');
    $item = new Item;
    $item->name = 'はじめてのPHP入門';
    $item->price = 1200;
    echo '名前:' . $item->name .'<br>価格:' . $item->price . '円';