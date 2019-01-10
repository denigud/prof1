<?php
session_start();
include_once __DIR__."/functions.php";

if(сheckPassword($_POST['login'], $_POST['password'])) {
    $_SESSION['user'] = $_POST['login'];
    header('Location: /5/');
    exit;
};
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<?php
//if(сheckPassword($_POST['login'], $_POST['password'])){
//    $_SESSION['user'] = $_POST['login'];
//    header('Location: /5/');
//}else{
?>
<form action="/5/login.php" method="POST">
    <input type="text" name="login" title="Login">
    <input type="password" name="password" title="password">
    <button type="submit">Войти</button>
</form>
<?php
//};
?>
</body>
</html>