<?php
include_once __DIR__."/functions.php";

if(сheckPassword($_POST['login'], $_POST['password'])){
    $_SESSION['user'] = $_POST['login'];
    echo "auth " . $_SESSION['user'];
    header('Location: /7/');
    exit;
}else{
    header('Location: /7/login.php');
    exit;
};
