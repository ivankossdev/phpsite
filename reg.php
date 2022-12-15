<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP web site</title>
</head>
<body>
<?php require "blocks/header.php" ?>
    <div class="container mt-5">
        <h1>Регистрация</h1>
        <form action="reg_check.php" method="post">
            <input class="form-control" type="text" name="login" id="login" placeholder="Введите логин">
            <br>
            <input class="form-control" type="text" name="name" id="name" placeholder="Введите имя">
            <br>
            <input class="form-control" type="password" name="pass" id="pass" placeholder="Введите пароль">
            <br>
            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>