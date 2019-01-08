<?php
include __DIR__."/data.php";

if (isset($_POST['record']) && !empty($_POST['record'])) {
    $records = getLinesOfFile();
    $records[] = $_POST['record'];
    file_put_contents(__DIR__.'/data.txt', implode("\n", $records));
}
header('Location: /4_1/');
exit;