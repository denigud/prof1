<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php new \App\JSLoader() ?>
    <?php new \App\CssLoader() ?>

    <title>Meter</title>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php if($_SERVER ["REQUEST_URI"] == '/'):?>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
        <?php else:?>
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=trim($_SERVER ["REQUEST_URI"],'/')?></li>
        <?endif;?>
    </ol>
</nav>
