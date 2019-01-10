<?php
session_start();
include_once __DIR__."/functions.php";

if(key_exists("session_destroy", $_POST) && NULL != getCurrentUser()){
    $_SESSION['user'] = null;
}

if (NULL == getCurrentUser()){
    header('Location: /5/login.php');
};

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5</title>
</head>
<body>
<?php
echo getCurrentUser();
if(NULL != getCurrentUser()):
?>
<form action="/5/" method="POST">
    <button type="submit" name="session_destroy">Выйти</button>
</form>
<?php endif; ?>
</body>
</html>