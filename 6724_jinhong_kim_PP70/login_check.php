<?php

session_start();

//login.html로 부터 받아온 값 변수에 저장 
if(isset($_POST['login']) === true){
    $login = trim($_POST['login']);
}

//login.html로 부터 받아온 값 변수에 저장 
if(isset($_POST['password']) === true){
    $password = trim($_POST['password']);
}

//아이디 패스워드 일치시 메시지 출력 그렇지 않으면 로그인 화면으로 돌아옴 
if($login === 'reskill' && $password === 'himitu'){
    $msg = 'ログイン成功しました。';
    $_SESSION['login'] = $login;
    $_SESSION['name'] = 'リスキル';
    header('Location:top.php');
} else{
    //unset($_SESSION['login']);
    //unset($_SESSION['name']);
    // $msg = 'Wrong Username or Password';
    header ("Location:login.php?login=fail");
    exit;
}
?>
