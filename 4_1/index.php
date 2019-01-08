<?php
include __DIR__."/data.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4_1</title>
</head>
<body>

<?php
    $lines = getLinesOfFile();
?>
<table>
    <th>Запись</th>
    <?php foreach ($lines as $line): ?>
        <tr>
            <td style="border-bottom: 1px solid black;"><?= $line ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<form action="addRecord.php" method="post">
    <input type="text" name="record">
    <input type="submit" value="Добавить">
</form>

</body>
</html>