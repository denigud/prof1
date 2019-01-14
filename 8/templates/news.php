<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>

<?php if($this->data['data'] !== false): ?>
    <?php foreach ($this->data['data'] as $record) : ?>
        <a href='/8/article.php?id=<?= $record['id'] ?>'><h3><?= $record['title'] ?></h3></a>
        <?= strip_tags(mb_substr($record['text'],0, 128).'...'); ?>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>

