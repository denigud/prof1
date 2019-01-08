<?php include __DIR__."/data.php"?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4_2</title>
</head>
<body>

<?php $images = getFilesFromDir();?>

<form action="/4_2/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <button type="submit">Отправить</button>
</form>

<?php foreach ($images as $image) :?>
    <a href="/4_2/images/<?php echo $image ?>"><img src="/4_2/images/<?php echo $image ?>" alt="" height="200px;"></a>
<?php endforeach;?>

</body>
</html>