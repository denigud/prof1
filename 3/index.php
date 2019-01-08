<?php
include __DIR__.'/calc.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>

<form action="index.php" method="GET">
    <input type="text" name="a" value="<?=$_GET["a"] ?? 0 ?>">
    <p><select name="operation">
            <option>+</option>
        </select></p>
    <input type="text" name="b" value="<?=$_GET["b"] ?? 0?>">
    <input type="submit" value="Равно">
    <?php
        echo calc();

    ?>
</form>

</body>
</html>
