<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7</title>
</head>
<body>
<?php
if(NULL != getCurrentUser()):
?>

<form action="/7/" method="POST">
    <?= getCurrentUser(); ?>
    <button type="submit" name="session_destroy">Выйти</button>
</form>
<br>
<div>
    <form action="/7/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myimg">
        <button type="submit">Отправить</button>
    </form>
</div>
<br>
<?php endif; ?>
<?php foreach ($this->data['images'] as $image) :?>
    <a href="/7/images/<?php echo $image ?>"><img src="/7/images/<?php echo $image ?>" alt="" height="200px;"></a>
<?php endforeach;?>

</body>
</html>