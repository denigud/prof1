<?php
$images = include __DIR__."/data.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>image</title>
</head>
<body>
<?php foreach ($images as $id => $image) :?>
    <a href="/3_2/image.php?id=<?php echo $id ?>"><img src="/3_2/images/<?php echo $image ?>" alt="" height="200px;"></a>
<?php endforeach;?>

</body>
</html>