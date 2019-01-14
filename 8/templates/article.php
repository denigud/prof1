<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$this->record['title']?></title>
</head>
<body>

<?php if($this->data['record'] !== false): ?>
    <?php $record = $this->data['record']; ?>

    <h1><?=$record['title'] ?></h1>
    Автор: <?=$record['author']?>
    <br>
    <?=$record['text']?>
<?php endif; ?>

</body>
</html>