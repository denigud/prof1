<?php
include __DIR__."/GuestBook.php";

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
    $guestBook = new \GuestBook\GuestBook(__DIR__."/data.txt");
    $lines = $guestBook->getData();
?>
<table>
    <th>Запись</th>
    <?php foreach ($lines as $line): ?>
        <tr>
            <td style="border-bottom: 1px solid black;"><?= $line ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<form action="/6/addRecord.php" method="post">
    <input type="text" name="record">
    <button type="submit">Добавить</button>
</form>

</body>
</html>