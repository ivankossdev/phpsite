<?php 
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if(trim($email) == '')
        $error = "Веедите ваш Email";
    else if(trim($message) == '')
        $error = "Веедите сообщение";
    
    if($error != ''){
        echo $error;
        exit;
    }
    header('Location: /phpsite');
?>