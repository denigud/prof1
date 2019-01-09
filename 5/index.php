<?php include __DIR__."/functions.php" ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5</title>
</head>
<body>

<?php

//$users = [];
//$users[] = 'admin';
//$users[] = password_hash('234567890', PASSWORD_DEFAULT);
//$users[] = 'user';
//$users[] = password_hash('123',PASSWORD_DEFAULT);
//$users[] = 'root';
//$users[] = password_hash('123456', PASSWORD_DEFAULT);
//$users[] = 'sys';
//$users[] = password_hash('159753', PASSWORD_DEFAULT);
//
//file_put_contents(__DIR__.'/data.txt', implode("\n", $users));
//echo '<pre>';
//var_dump(getUsersList());
//echo '</pre>';
//
//echo '<pre>';
//echo existsUser("admin");
//echo '</pre>';
//
//echo '<pre>';
//echo сheckPassword("user", "123");
//echo '</pre>';

echo '<pre>';
echo getCurrentUser();
echo '</pre>';

?>



</body>
</html>