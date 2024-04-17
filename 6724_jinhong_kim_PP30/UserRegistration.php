<?php
/*
【エラーチェック】
Step6：名前と年齢をフォームから受け取り、エラーチェックをしなさい。

＜仕様＞
•名前が11文字以上だと「名前は10文字以内で入力してください」というエラーを表示する
•名前が「admin」だと「利用できない名前です」というエラーを表示する
•名前に「㌔」という文字が含まれていると「㌔は禁止文字です」というエラーを表示する
•年齢が0～130の間になければ「年齢は0以上130以下で入力してください」というエラーを表示する
•エラーはまとめて出力する
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    
    //ここに判定式
    $errors = getUserinfo($name, $age);

    /*
    if(empty($errors)){
        echo 'Please Enter to Username and Age';
    } 
    */
}

function getUserinfo($name, $age){
    /*
    if(empty($errors)){
        echo 'ユーザーネームを入力してください' . '<br>' ;  
    } */
    if(strlen($name) >= 11){
        echo '名前は10文字以内で入力してください' . '<br>';
    } if($name === 'admin'){
        echo '利用できない名前です' . '<br>';
    } if(strpos($name, '㌔') !== false){
        echo "㌔は禁止文字です" . '<br>';
    } if($age < 0 || $age > 131){
        echo '年齢は0以上130以下で入力してください' . '<br>';
    } else{
        echo 'Your Username is : ' . $name . '<br>' . 'Your Age is :' . $age;
    }
}   


 ?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>UserInfprmation Check System</h3>
    <form action="" method="post">
        <input type="text" name="name" placeholder="名前">
            <br>
        <input type="number" name="age" placeholder="年齢">
         <br>
        <button>送信</button>
    </form>
</body>
</html>
