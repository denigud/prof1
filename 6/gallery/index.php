<?php
session_start();
include_once __DIR__."/functions.php";
include_once __DIR__."/data.php";

if(key_exists("session_destroy", $_POST) && NULL != getCurrentUser()){
    $_SESSION['user'] = null;
}

if (NULL == getCurrentUser()){
    include_once __DIR__."/login.php";
};

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6</title>
</head>
<body>
<?php
if(NULL != getCurrentUser()):
?>

<form action="/6/gallery/" method="POST">
    <?= getCurrentUser(); ?>
    <button type="submit" name="session_destroy">Выйти</button>
</form>
<br>
<div>
    <form action="/6/gallery/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myimg">
        <button type="submit">Отправить</button>
    </form>
</div>
<br>
<?php endif; ?>




<?php $images = getFilesFromDir();?>
<?php foreach ($images as $image) :?>
    <a href="/6/gallery/images/<?php echo $image ?>"><img src="/6/gallery/images/<?php echo $image ?>" alt="" height="200px;"></a>
<?php endforeach;?>

</body>
</html>