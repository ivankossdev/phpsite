<?php
    // var_dump($_POST);    
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
    if(mb_strlen($login) > 10 || $name == ""){
        echo "!!!";
        exit();
    }
    $pass = md5($pass."12345");
    $mysql = new mysqli("localhost", "root", "root", "phpsite");
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
    $mysql->close();
    // echo $login." ".$name." ".$pass;
    header('Location: /phpsite');
?>