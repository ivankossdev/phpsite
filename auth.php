<?php
    if ($_COOKIE['user'] == 'true')
        setcookie('user', 'true', time() - 3600, '/phpsite');
    else
        setcookie('user', 'true', time() + 3600, '/phpsite');
    header('Location: /phpsite');
?>